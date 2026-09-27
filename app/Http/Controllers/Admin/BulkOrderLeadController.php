<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BulkOrderLead;
use App\Mail\BulkOrderAdminNotification;
use App\Mail\BulkOrderCustomerConfirmation;
use App\Http\Controllers\Traits\AdminViewSharedDataTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class BulkOrderLeadController extends Controller
{
    use AdminViewSharedDataTrait;

    public function __construct()
    {
        $this->shareAdminViewData();
    }

    public function index(Request $request)
    {
        $query = BulkOrderLead::query();

        // Optional status filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Optional lead source filter (ads vs organic)
        if ($request->filled('source') && $request->source !== 'all') {
            if ($request->source === 'ads') {
                $query->where(function ($q) {
                    $q->where('lead_source', 'like', '%ads%')
                      ->orWhere('lead_source', 'like', 'ad%');
                });
            } elseif ($request->source === 'organic') {
                $query->where(function ($q) {
                    $q->whereNull('lead_source')
                      ->orWhere('lead_source', 'like', '%organic%');
                });
            }
        }

        // Optional search filter
        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('name', 'like', "%{$s}%")
                  ->orWhere('phone', 'like', "%{$s}%")
                  ->orWhere('email', 'like', "%{$s}%")
                  ->orWhere('location', 'like', "%{$s}%")
                  ->orWhere('event_type', 'like', "%{$s}%")
                  ->orWhere('lead_source', 'like', "%{$s}%");
            });
        }

        $leads = $query->orderBy('created_at', 'desc')->get();

        // Calculate summary statistics
        $allLeads = BulkOrderLead::all();
        $isAd = fn($l) => str_contains(strtolower($l->lead_source ?? ''), 'ads') || str_starts_with(strtolower($l->lead_source ?? ''), 'ad');
        $stats = [
            'total' => $allLeads->count(),
            'pending' => $allLeads->where('status', 'pending')->count(),
            'contacted' => $allLeads->where('status', 'contacted')->count(),
            'confirmed' => $allLeads->where('status', 'confirmed')->count(),
            'completed' => $allLeads->where('status', 'completed')->count(),
            'ads_count' => $allLeads->filter($isAd)->count(),
            'organic_count' => $allLeads->reject($isAd)->count(),
            'total_value' => $allLeads->sum('estimated_total'),
            'admin_mail_sent_count' => $allLeads->where('admin_mail_sent', true)->count(),
            'customer_mail_sent_count' => $allLeads->where('customer_mail_sent', true)->count(),
        ];

        return view('admin.bulk-orders', compact('leads', 'stats'));
    }

    public function show($id)
    {
        $lead = BulkOrderLead::findOrFail($id);

        return response()->json([
            'success' => true,
            'lead' => $lead,
            'items' => $lead->parsed_items,
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $lead = BulkOrderLead::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,contacted,confirmed,completed,cancelled',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $lead->update($validated);

        return back()->with('success', 'Bulk order lead status updated successfully!');
    }

    public function resendMail(Request $request, $id)
    {
        $lead = BulkOrderLead::findOrFail($id);

        $type = $request->input('mail_type', 'admin'); // 'admin' or 'customer' or 'both'
        $adminSuccess = false;
        $customerSuccess = false;
        $message = '';

        $leadData = [
            'name' => $lead->name,
            'phone' => $lead->phone,
            'email' => $lead->email,
            'event_date' => $lead->event_date ? $lead->event_date->format('Y-m-d') : null,
            'event_type' => $lead->event_type,
            'location' => $lead->location,
            'latitude' => $lead->latitude,
            'longitude' => $lead->longitude,
            'formatted_address' => $lead->formatted_address,
            'items' => $lead->parsed_items,
            'instructions' => $lead->instructions,
            'lead_source' => $lead->lead_source,
            'page_source' => $lead->page_source,
        ];

        if ($type === 'admin' || $type === 'both') {
            try {
                Mail::to(config('mail.from.address', 'byteminiz@gmail.com'))->send(new BulkOrderAdminNotification($leadData));
                $lead->admin_mail_sent = true;
                $lead->admin_mail_error = null;
                $adminSuccess = true;
                $message .= 'Admin notification sent. ';
            } catch (\Exception $e) {
                $lead->admin_mail_error = $e->getMessage();
                Log::error('Admin email resend error: ' . $e->getMessage());
                $message .= 'Admin notification failed: ' . $e->getMessage() . '. ';
            }
        }

        if (($type === 'customer' || $type === 'both') && !empty($lead->email)) {
            try {
                Mail::to($lead->email)->send(new BulkOrderCustomerConfirmation($leadData));
                $lead->customer_mail_sent = true;
                $lead->customer_mail_error = null;
                $customerSuccess = true;
                $message .= 'Customer confirmation sent. ';
            } catch (\Exception $e) {
                $lead->customer_mail_error = $e->getMessage();
                Log::error('Customer email resend error: ' . $e->getMessage());
                $message .= 'Customer confirmation failed: ' . $e->getMessage() . '. ';
            }
        }

        $lead->save();

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => $adminSuccess || $customerSuccess,
                'message' => trim($message),
                'admin_mail_sent' => $lead->admin_mail_sent,
                'customer_mail_sent' => $lead->customer_mail_sent,
            ]);
        }

        return back()->with('success', trim($message));
    }

    public function destroy($id)
    {
        $lead = BulkOrderLead::findOrFail($id);
        $lead->delete();

        return back()->with('success', 'Bulk order lead deleted successfully.');
    }
}

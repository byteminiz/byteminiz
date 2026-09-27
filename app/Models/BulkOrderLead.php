<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulkOrderLead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'event_date',
        'event_type',
        'location',
        'latitude',
        'longitude',
        'formatted_address',
        'order_items',
        'total_items_count',
        'estimated_total',
        'instructions',
        'admin_mail_sent',
        'admin_mail_error',
        'customer_mail_sent',
        'customer_mail_error',
        'status',
        'admin_notes',
        'lead_source',
        'page_source',
    ];

    protected $casts = [
        'event_date' => 'date',
        'admin_mail_sent' => 'boolean',
        'customer_mail_sent' => 'boolean',
        'estimated_total' => 'decimal:2',
        'total_items_count' => 'integer',
    ];

    // Helper to get decoded items array
    public function getParsedItemsAttribute()
    {
        if (empty($this->order_items)) {
            return [];
        }
        if (is_array($this->order_items)) {
            return $this->order_items;
        }
        $decoded = json_decode($this->order_items, true);
        return is_array($decoded) ? $decoded : [];
    }

    // Status Badge HTML Helper
    public function getStatusBadgeHtmlAttribute()
    {
        switch ($this->status) {
            case 'pending':
                return '<label class="badge badge-warning text-dark"><i class="fa fa-clock mr-1"></i> Pending</label>';
            case 'contacted':
                return '<label class="badge badge-info"><i class="fa fa-phone mr-1"></i> Contacted</label>';
            case 'confirmed':
                return '<label class="badge badge-primary"><i class="fa fa-check mr-1"></i> Confirmed</label>';
            case 'completed':
                return '<label class="badge badge-success"><i class="fa fa-check-double mr-1"></i> Completed</label>';
            case 'cancelled':
                return '<label class="badge badge-danger"><i class="fa fa-times mr-1"></i> Cancelled</label>';
            default:
                return '<label class="badge badge-secondary">' . ucfirst($this->status) . '</label>';
        }
    }

    // Lead Source Badge HTML Helper
    public function getLeadSourceBadgeHtmlAttribute()
    {
        $source = strtolower($this->lead_source ?? 'organic');
        if (str_contains($source, 'ads') || str_starts_with($source, 'ad')) {
            return '<label class="badge badge-danger" style="background-color: #dc3545; color: #fff;"><i class="fa fa-bullhorn mr-1"></i> Ads Lead</label>';
        }
        return '<label class="badge badge-success" style="background-color: #28a745; color: #fff;"><i class="fa fa-leaf mr-1"></i> Organic Lead</label>';
    }
}

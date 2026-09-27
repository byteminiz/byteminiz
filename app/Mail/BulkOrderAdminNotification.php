<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BulkOrderAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct(array $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        $customerName = $this->enquiry['name'] ?? 'Customer';
        $leadSource = $this->enquiry['lead_source'] ?? 'Organic Lead';
        return $this->subject("🍔 [{$leadSource}] New Bulk Order Enquiry from {$customerName} - ByteMiniz")
                    ->view('emails.bulk_order_admin_notification');
    }
}

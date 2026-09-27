<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BulkOrderCustomerConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct(array $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->subject("🍔 We've Received Your Bulk Order Enquiry - ByteMiniz")
                    ->view('emails.bulk_order_customer_confirmation');
    }
}

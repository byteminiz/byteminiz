<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$enquiry = [
    'name' => 'Test User',
    'phone' => '+919999999999',
    'email' => 'sri3952@gmail.com',
    'event_date' => '2026-10-01',
    'event_type' => 'Birthday Party',
    'location' => 'Test Location, Bangalore',
    'instructions' => 'Test instructions',
    'order_items' => json_encode([
        ['name' => 'Test Burger', 'price' => 100, 'qty' => 50]
    ])
];

\Illuminate\Support\Facades\Mail::to('sri3952@gmail.com')->send(new \App\Mail\BulkOrderCustomerConfirmation($enquiry));
echo "Mail sent successfully!";

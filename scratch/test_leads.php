<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\BulkOrderLead;
use Illuminate\Http\Request;
use App\Http\Controllers\MainSiteController;

echo "--- Current Latest Lead ---\n";
$latest = BulkOrderLead::latest()->first();
if ($latest) {
    echo "ID: {$latest->id}\n";
    echo "Name: {$latest->name}\n";
    echo "Lead Source: {$latest->lead_source}\n";
    echo "Page Source: {$latest->page_source}\n";
} else {
    echo "No leads found.\n";
}

echo "\n--- Simulating Form Submissions ---\n";
$controller = new MainSiteController();

// 1. Ads Lead Submission
$reqAds = Request::create('/lp/bulk_order/enquire', 'POST', [
    'name' => 'Ad Campaign Lead',
    'phone' => '9876543210',
    'email' => 'adcampaign@example.com',
    'event_date' => '2026-10-25',
    'location' => 'Ad Location, Bengaluru',
    'event_type' => 'corporate',
    'instructions' => 'Test submission from ad campaign',
    'lead_source' => 'Ads Lead',
    'page_source' => '/lp/bulk_order',
    'total_items_count' => 3,
    'estimated_total' => 2500,
    'items' => json_encode([['name' => 'Mini Samosa Bucket', 'qty' => 3, 'price' => 833]])
]);

$resAds = $controller->submitBulkOrderEnquiry($reqAds);
echo "Ads Lead Submission Response: " . json_encode($resAds->getData()) . "\n";

// 2. Organic Lead Submission
$reqOrganic = Request::create('/bulkorders/enquire', 'POST', [
    'name' => 'Organic Search Lead',
    'phone' => '9123456789',
    'email' => 'organicuser@example.com',
    'event_date' => '2026-11-01',
    'location' => 'Organic Location, Mysuru',
    'event_type' => 'wedding',
    'instructions' => 'Test submission from organic bulk orders page',
    'lead_source' => 'Organic Lead',
    'page_source' => '/bulkorders',
    'total_items_count' => 10,
    'estimated_total' => 12000,
    'items' => json_encode([['name' => 'Mini Sandwich Platter', 'qty' => 10, 'price' => 1200]])
]);

$resOrganic = $controller->submitBulkOrderEnquiry($reqOrganic);
echo "Organic Lead Submission Response: " . json_encode($resOrganic->getData()) . "\n";

echo "\n--- Recent Leads in DB ---\n";
$leads = BulkOrderLead::latest()->take(2)->get();
foreach ($leads as $l) {
    echo "#{$l->id} | Name: {$l->name} | Lead Source: {$l->lead_source} | Page Source: {$l->page_source} | Badge HTML: {$l->lead_source_badge_html}\n";
}

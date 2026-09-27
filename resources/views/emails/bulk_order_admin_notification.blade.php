<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Bulk Order Enquiry - ByteMiniz</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f7;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: #333333;
            line-height: 1.6;
        }
        .wrapper {
            width: 100%;
            background-color: #f4f4f7;
            padding: 30px 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        }
        .header {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d1800 100%);
            padding: 25px 30px;
            text-align: center;
        }
        .header img {
            max-height: 50px;
            width: auto;
        }
        .badge {
            display: inline-block;
            background: #fdca00;
            color: #1a1a1a;
            font-weight: 800;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 4px 10px;
            border-radius: 20px;
            margin-top: 10px;
        }
        .content {
            padding: 30px;
        }
        h1 {
            color: #1a1a1a;
            font-size: 22px;
            font-weight: 800;
            margin: 0 0 15px 0;
        }
        .intro {
            font-size: 15px;
            color: #555555;
            margin-bottom: 25px;
        }
        .card-box {
            background-color: #fcfbf7;
            border: 1px solid #ede7d5;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
        }
        .card-box h3 {
            margin: 0 0 15px 0;
            font-size: 16px;
            color: #FB6107;
            border-bottom: 2px solid #fdca00;
            padding-bottom: 6px;
            display: inline-block;
        }
        .info-grid {
            width: 100%;
            border-collapse: collapse;
        }
        .info-grid td {
            padding: 6px 0;
            font-size: 14px;
            vertical-align: top;
        }
        .info-label {
            font-weight: 700;
            color: #555555;
            width: 35%;
        }
        .info-value {
            color: #1a1a1a;
            font-weight: 500;
        }
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .items-table th {
            background-color: #1a1a1a;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 10px 12px;
            text-align: left;
        }
        .items-table td {
            padding: 10px 12px;
            border-bottom: 1px solid #eeeeee;
            font-size: 14px;
        }
        .items-table tr:last-child td {
            border-bottom: none;
        }
        .total-row {
            background-color: #fff8e1;
            font-weight: 800;
            font-size: 15px;
            color: #1a1a1a;
        }
        .total-row td {
            padding: 12px;
            border-top: 2px solid #fdca00 !important;
        }
        .btn-group {
            text-align: center;
            margin: 30px 0 10px 0;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #fdca00, #FB6107);
            color: #ffffff !important;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            padding: 12px 24px;
            border-radius: 30px;
            margin: 5px;
            box-shadow: 0 4px 12px rgba(251,97,7,0.3);
        }
        .footer {
            text-align: center;
            padding: 20px 30px;
            background-color: #f8f8f8;
            border-top: 1px solid #eeeeee;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <!-- Header -->
            <div class="header">
                <img src="https://lh3.googleusercontent.com/d/1jICugAmB2VA6QBSRap-3rU5k0nKRrakE" alt="ByteMiniz">
                <br>
                <span class="badge">🔥 New Bulk Order Enquiry</span>
                @if(!empty($enquiry['lead_source']))
                  @if(str_contains(strtolower($enquiry['lead_source']), 'ad'))
                    <span class="badge" style="background: #dc3545; color: #ffffff; margin-left: 6px;">🎯 ADS LEAD</span>
                  @else
                    <span class="badge" style="background: #28a745; color: #ffffff; margin-left: 6px;">🌱 ORGANIC LEAD</span>
                  @endif
                @endif
            </div>

            <!-- Main Content -->
            <div class="content">
                <h1>Hello ByteMiniz Team,</h1>
                <p class="intro">You have received a new bulk order & catering enquiry. Here are the complete details:</p>

                <!-- Customer Details -->
                <div class="card-box">
                    <h3>👤 Customer Contact & Source</h3>
                    <table class="info-grid">
                        <tr>
                            <td class="info-label">Lead Source:</td>
                            <td class="info-value">
                                @if(str_contains(strtolower($enquiry['lead_source'] ?? 'organic'), 'ad'))
                                    <span style="display:inline-block; padding:3px 10px; background:#dc3545; color:#fff; font-weight:800; border-radius:12px; font-size:12px;">🎯 ADS LEAD</span>
                                @else
                                    <span style="display:inline-block; padding:3px 10px; background:#28a745; color:#fff; font-weight:800; border-radius:12px; font-size:12px;">🌱 ORGANIC LEAD</span>
                                @endif
                                @if(!empty($enquiry['page_source']))
                                    <span style="font-size:12px; color:#666; margin-left:8px;">(Page: {{ $enquiry['page_source'] }})</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="info-label">Full Name:</td>
                            <td class="info-value"><strong>{{ $enquiry['name'] ?? 'N/A' }}</strong></td>
                        </tr>
                        <tr>
                            <td class="info-label">Phone Number:</td>
                            <td class="info-value"><a href="tel:{{ $enquiry['phone'] ?? '' }}" style="color:#FB6107; font-weight:700; text-decoration:none;">{{ $enquiry['phone'] ?? 'N/A' }}</a></td>
                        </tr>
                        @if(!empty($enquiry['email']))
                        <tr>
                            <td class="info-label">Email Address:</td>
                            <td class="info-value"><a href="mailto:{{ $enquiry['email'] }}" style="color:#1a73e8; text-decoration:none;">{{ $enquiry['email'] }}</a></td>
                        </tr>
                        @endif
                    </table>
                </div>

                <!-- Event & Delivery Details -->
                <div class="card-box">
                    <h3>📅 Event & Location</h3>
                    <table class="info-grid">
                        <tr>
                            <td class="info-label">Event Date:</td>
                            <td class="info-value"><strong>{{ !empty($enquiry['event_date']) ? date('D, d M Y', strtotime($enquiry['event_date'])) : 'N/A' }}</strong></td>
                        </tr>
                        <tr>
                            <td class="info-label">Event Type:</td>
                            <td class="info-value" style="text-transform:capitalize;">{{ $enquiry['event_type'] ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td class="info-label">Delivery Location:</td>
                            <td class="info-value">{{ $enquiry['location'] ?? 'N/A' }}</td>
                        </tr>
                        @if(!empty($enquiry['latitude']) && !empty($enquiry['longitude']))
                        <tr>
                            <td class="info-label">Map Coordinates:</td>
                            <td class="info-value">
                                <a href="https://www.google.com/maps?q={{ $enquiry['latitude'] }},{{ $enquiry['longitude'] }}" target="_blank" style="color:#FB6107; font-weight:600; text-decoration:none;">
                                    📍 {{ $enquiry['latitude'] }}, {{ $enquiry['longitude'] }} (Open in Google Maps)
                                </a>
                            </td>
                        </tr>
                        @endif
                    </table>
                </div>

                <!-- Ordered Items -->
                @if(!empty($enquiry['items']) && count($enquiry['items']) > 0)
                <div class="card-box">
                    <h3>🍔 Selected Bytz Items</h3>
                    <table class="items-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th style="text-align:center;">Qty</th>
                                <th style="text-align:right;">Price</th>
                                <th style="text-align:right;">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $totalAmount = 0; $totalQty = 0; @endphp
                            @foreach($enquiry['items'] as $item)
                            @php 
                                $qty = intval($item['qty'] ?? 1);
                                $price = floatval($item['price'] ?? 0);
                                $sub = $qty * $price;
                                $totalAmount += $sub;
                                $totalQty += $qty;
                            @endphp
                            <tr>
                                <td><strong>{{ $item['name'] ?? 'Item' }}</strong></td>
                                <td style="text-align:center;">{{ $qty }}</td>
                                <td style="text-align:right;">₹{{ number_format($price, 0) }}</td>
                                <td style="text-align:right; font-weight:600;">₹{{ number_format($sub, 0) }}</td>
                            </tr>
                            @endforeach
                            <tr class="total-row">
                                <td colspan="2">Total ({{ $totalQty }} Items)</td>
                                <td colspan="2" style="text-align:right; color:#FB6107; font-size:16px;">₹{{ number_format($totalAmount, 0) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endif

                <!-- Special Instructions -->
                @if(!empty($enquiry['instructions']))
                <div class="card-box">
                    <h3>📝 Special Instructions</h3>
                    <p style="margin:0; font-size:14px; font-style:italic; color:#444;">"{{ $enquiry['instructions'] }}"</p>
                </div>
                @endif

                <!-- Action Buttons -->
                <div class="btn-group">
                    <a href="tel:{{ $enquiry['phone'] ?? '' }}" class="btn">📞 Call {{ $enquiry['name'] ?? 'Customer' }}</a>
                    @if(!empty($enquiry['phone']))
                    <a href="https://wa.me/91{{ preg_replace('/[^0-9]/', '', $enquiry['phone']) }}" class="btn" style="background:#25D366;">💬 WhatsApp</a>
                    @endif
                </div>
            </div>

            <!-- Footer -->
            <div class="footer">
                <p style="margin:0 0 5px 0;">This is an automated notification from your <strong>ByteMiniz Bulk Order System</strong>.</p>
                <p style="margin:0;">© {{ date('Y') }} ByteMiniz. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>

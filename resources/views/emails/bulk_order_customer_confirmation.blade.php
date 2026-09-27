<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We've Received Your Bulk Order Enquiry - ByteMiniz</title>
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
            padding: 30px;
            text-align: center;
        }
        .header img {
            max-height: 55px;
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
            padding: 4px 12px;
            border-radius: 20px;
            margin-top: 12px;
        }
        .content {
            padding: 30px;
        }
        h1 {
            color: #1a1a1a;
            font-size: 22px;
            font-weight: 800;
            margin: 0 0 12px 0;
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
            margin-bottom: 20px;
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
            color: #666666;
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
        .highlight-box {
            background: #eaf8f0;
            border-left: 4px solid #20AF6D;
            padding: 15px;
            border-radius: 6px;
            margin: 25px 0;
            font-size: 14px;
            color: #155724;
        }
        .cta-btn {
            display: block;
            text-align: center;
            background: linear-gradient(135deg, #fdca00, #FB6107);
            color: #ffffff !important;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            padding: 14px 28px;
            border-radius: 50px;
            margin: 25px auto 10px auto;
            max-width: 250px;
            box-shadow: 0 4px 15px rgba(251,97,7,0.35);
        }
        .footer {
            text-align: center;
            padding: 25px 30px;
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
                <span class="badge">🍔 Bulk Order Enquiry Received</span>
            </div>

            <!-- Main Content -->
            <div class="content">
                <h1>Hi {{ $enquiry['name'] ?? 'There' }},</h1>
                <p class="intro">Thank you for considering <strong>ByteMiniz</strong> for your event! We have received your bulk order enquiry and our catering specialists are already reviewing your requirements.</p>

                <div class="highlight-box">
                    <strong>⏳ What's next?</strong> Our team will contact you on <strong>{{ $enquiry['phone'] ?? 'your phone' }}</strong> within 2 hours to confirm pricing, delivery logistics, and menu customization.
                </div>

                <!-- Event Details Summary -->
                <div class="card-box">
                    <h3>📅 Your Event Summary</h3>
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
                            <td class="info-label">Location:</td>
                            <td class="info-value">{{ $enquiry['location'] ?? 'N/A' }}</td>
                        </tr>
                    </table>
                </div>

                <!-- Selected Items Summary -->
                @if(!empty($enquiry['items']) && count($enquiry['items']) > 0)
                <div class="card-box">
                    <h3>🍔 Selected Bytz Items</h3>
                    <table class="items-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th style="text-align:center;">Qty</th>
                                <th style="text-align:right;">Est. Total</th>
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
                                <td style="text-align:right;">₹{{ number_format($sub, 0) }}</td>
                            </tr>
                            @endforeach
                            <tr class="total-row">
                                <td>Estimated Total ({{ $totalQty }} Items)</td>
                                <td></td>
                                <td style="text-align:right; color:#FB6107; font-size:16px;">₹{{ number_format($totalAmount, 0) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endif

                @if(!empty($enquiry['instructions']))
                <div class="card-box">
                    <h3>📝 Special Request</h3>
                    <p style="margin:0; font-size:14px; font-style:italic; color:#444;">"{{ $enquiry['instructions'] }}"</p>
                </div>
                @endif

                <p style="text-align:center; margin-top:25px; font-size:14px; color:#666;">Need immediate assistance? Feel free to reach out to us:</p>
                <a href="https://wa.me/917411452577" class="cta-btn" style="background:#25D366; box-shadow:0 4px 15px rgba(37,211,102,0.35);">
                    💬 Chat on WhatsApp
                </a>
            </div>

            <!-- Footer -->
            <div class="footer">
                <p style="margin:0 0 5px 0;">ByteMiniz — Fresh, Pure Vegetarian Mini Burgers for Every Celebration.</p>
                <p style="margin:0;">© {{ date('Y') }} ByteMiniz. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>

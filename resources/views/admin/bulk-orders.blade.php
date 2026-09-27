@extends('layouts.admin')

@push('styles')
    <!-- base:css -->
    <link rel="stylesheet" href="/admin_resources/vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="/admin_resources/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin_resources/css/vertical-layout-light/style.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .stat-card {
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            color: #fff;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: transform 0.25s ease;
        }
        .stat-card:hover { transform: translateY(-3px); }
        .stat-card.bg-grad-primary { background: linear-gradient(135deg, #4776E6, #8E54E9); }
        .stat-card.bg-grad-warning { background: linear-gradient(135deg, #F2994A, #F2C94C); }
        .stat-card.bg-grad-success { background: linear-gradient(135deg, #11998e, #38ef7d); }
        .stat-card.bg-grad-orange { background: linear-gradient(135deg, #FF416C, #FF4B2B); }
        .stat-card h3 { font-size: 1.8rem; font-weight: 800; margin: 0; }
        .stat-card p { font-size: 0.85rem; margin: 0; opacity: 0.9; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 600; }
        .stat-card i { font-size: 2.4rem; opacity: 0.85; }

        .mail-badge-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 3px 8px; border-radius: 6px; font-size: 11px; font-weight: 700; display: inline-flex; align-items: center; gap: 4px; }
        .mail-badge-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 3px 8px; border-radius: 6px; font-size: 11px; font-weight: 700; display: inline-flex; align-items: center; gap: 4px; cursor: help; }
        .mail-badge-muted { background-color: #e2e3e5; color: #6c757d; border: 1px solid #d6d8db; padding: 3px 8px; border-radius: 6px; font-size: 11px; font-weight: 600; }

        .filter-pill { border-radius: 50px; padding: 6px 16px; font-size: 13px; font-weight: 600; margin-right: 6px; margin-bottom: 8px; text-decoration: none !important; display: inline-flex; align-items: center; gap: 5px; }
        .filter-pill.active { background-color: #1a1a1a; color: #fdca00 !important; }
        .filter-pill:not(.active) { background-color: #f0f0f0; color: #555 !important; }
        .filter-pill:hover { background-color: #e0e0e0; }

        .table td { vertical-align: middle !important; }
        .customer-avatar { width: 38px; height: 38px; border-radius: 50%; background: linear-gradient(135deg, #fdca00, #FB6107); color: #fff; display: inline-flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; margin-right: 10px; }
        .item-chip { display: inline-block; background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 4px; padding: 2px 6px; font-size: 11px; margin: 2px; }

        .lead-detail-box { background: #fdfdfd; border: 1px solid #eee; border-radius: 10px; padding: 15px; margin-bottom: 15px; }
        .lead-detail-title { font-weight: 700; font-size: 13px; text-transform: uppercase; color: #FB6107; margin-bottom: 10px; border-bottom: 1px solid #eee; padding-bottom: 5px; }
    </style>
@endpush

@push('scripts')
<script src="/admin_resources/vendors/js/vendor.bundle.base.js"></script>
<script src="/admin_resources/js/off-canvas.js"></script>
<script src="/admin_resources/js/hoverable-collapse.js"></script>
<script src="/admin_resources/js/template.js"></script>
<script src="/admin_resources/js/settings.js"></script>
<script src="/admin_resources/js/todolist.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#bulk-leads-table').DataTable({
            paging: true,
            searching: true,
            lengthChange: true,
            pageLength: 10,
            order: [[0, 'desc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search leads (name, phone, location...)"
            }
        });

        // Open View Details Modal
        $('.view-lead-btn').click(function() {
            var leadId = $(this).data('id');
            var btn = $(this);
            btn.prop('disabled', true);

            $.get("{{ url('admin/bulk-orders') }}/" + leadId, function(res) {
                btn.prop('disabled', false);
                if (res.success && res.lead) {
                    var l = res.lead;
                    $('#detailLeadId').text('#' + l.id);
                    var srcBadge = (l.lead_source && (l.lead_source.toLowerCase().indexOf('ads') !== -1 || l.lead_source.toLowerCase().indexOf('ad') === 0)) ? 
                        '<span class="badge badge-danger text-white"><i class="fa fa-bullhorn mr-1"></i> Ads Lead</span>' : 
                        '<span class="badge badge-success text-white"><i class="fa fa-leaf mr-1"></i> Organic Lead</span>';
                    $('#detailLeadSourceBadge').html(srcBadge);
                    $('#detailPageSource').text(l.page_source ? '(' + l.page_source + ')' : '');
                    $('#detailCustomerName').text(l.name);
                    $('#detailCustomerPhone').text(l.phone);
                    $('#detailPhoneLink').attr('href', 'tel:' + l.phone);
                    $('#detailWhatsAppLink').attr('href', 'https://wa.me/91' + l.phone.replace(/[^0-9]/g, ''));
                    $('#detailCustomerEmail').text(l.email ? l.email : 'Not provided');
                    if (l.email) {
                        $('#detailEmailLink').attr('href', 'mailto:' + l.email).show();
                    } else {
                        $('#detailEmailLink').hide();
                    }

                    $('#detailEventDate').text(l.event_date ? new Date(l.event_date).toLocaleDateString('en-IN', { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' }) : 'N/A');
                    $('#detailEventType').text(l.event_type ? l.event_type.toUpperCase() : 'N/A');
                    $('#detailLocation').text(l.location || 'N/A');

                    if (l.latitude && l.longitude) {
                        $('#detailMapLink').attr('href', 'https://www.google.com/maps?q=' + l.latitude + ',' + l.longitude).show();
                        $('#detailCoords').text(l.latitude + ', ' + l.longitude);
                    } else {
                        $('#detailMapLink').hide();
                        $('#detailCoords').text('Manual address');
                    }

                    $('#detailInstructions').text(l.instructions ? '"' + l.instructions + '"' : 'None specified');
                    $('#detailStatusSelect').val(l.status);
                    $('#detailAdminNotes').val(l.admin_notes || '');

                    var statusActionUrl = "{{ route('admin.bulk-orders.status', ':id') }}".replace(':id', l.id);
                    $('#updateStatusForm').attr('action', statusActionUrl);

                    // Render Items Table
                    var itemsHtml = '';
                    var subTotalCalc = 0;
                    if (res.items && res.items.length) {
                        res.items.forEach(function(item) {
                            var q = parseInt(item.qty) || 1;
                            var p = parseFloat(item.price) || 0;
                            var line = q * p;
                            subTotalCalc += line;
                            itemsHtml += '<tr>';
                            itemsHtml += '  <td><strong>' + item.name + '</strong></td>';
                            itemsHtml += '  <td class="text-center">' + q + '</td>';
                            itemsHtml += '  <td class="text-right">₹' + p.toLocaleString('en-IN') + '</td>';
                            itemsHtml += '  <td class="text-right"><strong>₹' + line.toLocaleString('en-IN') + '</strong></td>';
                            itemsHtml += '</tr>';
                        });
                        itemsHtml += '<tr style="background:#fff8e1; font-weight:800;">';
                        itemsHtml += '  <td colspan="3">Estimated Total (' + l.total_items_count + ' items)</td>';
                        itemsHtml += '  <td class="text-right text-danger">₹' + (parseFloat(l.estimated_total) || subTotalCalc).toLocaleString('en-IN') + '</td>';
                        itemsHtml += '</tr>';
                    } else {
                        itemsHtml = '<tr><td colspan="4" class="text-center text-muted">No items itemized</td></tr>';
                    }
                    $('#detailItemsBody').html(itemsHtml);

                    // Mail Status Diagnostics
                    var adminMailHtml = l.admin_mail_sent 
                        ? '<span class="mail-badge-success"><i class="fa fa-check-circle"></i> Sent to byteminiz@gmail.com</span>'
                        : '<span class="mail-badge-danger" title="' + (l.admin_mail_error || '') + '"><i class="fa fa-times-circle"></i> Failed to Send</span>';
                    $('#detailAdminMailStatus').html(adminMailHtml);
                    if (l.admin_mail_error) {
                        $('#detailAdminMailError').text('Error: ' + l.admin_mail_error).show();
                    } else {
                        $('#detailAdminMailError').hide();
                    }

                    var custMailHtml = '';
                    if (!l.email) {
                        custMailHtml = '<span class="mail-badge-muted"><i class="fa fa-minus-circle"></i> No customer email provided</span>';
                    } else if (l.customer_mail_sent) {
                        custMailHtml = '<span class="mail-badge-success"><i class="fa fa-check-circle"></i> Sent to ' + l.email + '</span>';
                    } else {
                        custMailHtml = '<span class="mail-badge-danger" title="' + (l.customer_mail_error || '') + '"><i class="fa fa-times-circle"></i> Failed to Send</span>';
                    }
                    $('#detailCustomerMailStatus').html(custMailHtml);
                    if (l.customer_mail_error) {
                        $('#detailCustomerMailError').text('Error: ' + l.customer_mail_error).show();
                    } else {
                        $('#detailCustomerMailError').hide();
                    }

                    // Resend button target
                    $('#btnResendAdminMail').data('id', l.id);
                    $('#btnResendCustomerMail').data('id', l.id);
                    if (!l.email) {
                        $('#btnResendCustomerMail').hide();
                    } else {
                        $('#btnResendCustomerMail').show();
                    }

                    var myModal = new bootstrap.Modal(document.getElementById('leadDetailModal'));
                    myModal.show();
                }
            }).fail(function() {
                btn.prop('disabled', false);
                alert('Could not fetch lead details.');
            });
        });

        // Resend Email AJAX Handler
        $('.btn-resend-ajax').click(function() {
            var btn = $(this);
            var leadId = btn.data('id');
            var mailType = btn.data('type');
            btn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Sending...');

            $.post("{{ url('admin/bulk-orders') }}/" + leadId + "/resend-mail", {
                _token: "{{ csrf_token() }}",
                mail_type: mailType
            }, function(res) {
                btn.prop('disabled', false);
                if (mailType === 'admin') btn.html('<i class="fa fa-envelope"></i> Resend to Admin');
                if (mailType === 'customer') btn.html('<i class="fa fa-paper-plane"></i> Resend to Customer');

                if (res.success) {
                    alert('✓ ' + res.message);
                    location.reload();
                } else {
                    alert('⚠️ ' + res.message);
                }
            }).fail(function() {
                btn.prop('disabled', false);
                if (mailType === 'admin') btn.html('<i class="fa fa-envelope"></i> Resend to Admin');
                if (mailType === 'customer') btn.html('<i class="fa fa-paper-plane"></i> Resend to Customer');
                alert('Network error while resending email.');
            });
        });

        // Delete Button Logic
        $('.delete-lead-btn').click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            $('#deleteLeadName').text(name);
            var actionUrl = "{{ route('admin.bulk-orders.destroy', ':id') }}".replace(':id', id);
            $('#deleteLeadForm').attr('action', actionUrl);
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteLeadModal'));
            deleteModal.show();
        });
    });
</script>
@endpush

@section('title', 'Admin - Bulk Order Leads')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        @include('partials.message-bag')

        <!-- Page Header -->
        <div class="row mb-3">
            <div class="col-12 d-flex align-items-center justify-content-between flex-wrap">
                <div>
                    <h3 class="font-weight-bold text-dark mb-1">
                        <i class="fa fa-boxes text-warning mr-2"></i> Bulk Order & Catering Leads
                    </h3>
                    <p class="text-muted mb-0">Manage customer enquiries submitted from the bulk order landing page (`/lp/bulk_order`).</p>
                </div>
                <div class="mt-2 mt-md-0">
                    <a href="{{ route('lp.bulk_order') }}" target="_blank" class="btn btn-outline-warning btn-sm font-weight-bold">
                        <i class="fa fa-external-link-alt mr-1"></i> View Landing Page
                    </a>
                </div>
            </div>
        </div>

        <!-- Metric Cards -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="stat-card bg-grad-primary">
                    <div>
                        <p>Total Leads</p>
                        <h3>{{ $stats['total'] }}</h3>
                    </div>
                    <i class="fa fa-users"></i>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card bg-grad-warning">
                    <div>
                        <p>Pending Review</p>
                        <h3>{{ $stats['pending'] }}</h3>
                    </div>
                    <i class="fa fa-clock"></i>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card bg-grad-success">
                    <div>
                        <p>Confirmed</p>
                        <h3>{{ $stats['confirmed'] }}</h3>
                    </div>
                    <i class="fa fa-check-circle"></i>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card bg-grad-orange">
                    <div>
                        <p>Est. Pipeline Value</p>
                        <h3>₹{{ number_format($stats['total_value'], 0) }}</h3>
                    </div>
                    <i class="fa fa-indian-rupee-sign"></i>
                </div>
            </div>
        </div>

        <!-- Filter Pills -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex flex-wrap align-items-center">
                    <span class="mr-2 text-muted font-weight-bold" style="font-size:13px;">Filter by Status:</span>
                    <a href="{{ route('admin.bulk-orders.index') }}" class="filter-pill {{ !request('status') && !request('source') ? 'active' : '' }}">
                        All Leads <span class="badge badge-light ml-1">{{ $stats['total'] }}</span>
                    </a>
                    <a href="{{ route('admin.bulk-orders.index', ['status' => 'pending']) }}" class="filter-pill {{ request('status') === 'pending' ? 'active' : '' }}">
                        <i class="fa fa-clock text-warning"></i> Pending <span class="badge badge-warning text-dark ml-1">{{ $stats['pending'] }}</span>
                    </a>
                    <a href="{{ route('admin.bulk-orders.index', ['status' => 'contacted']) }}" class="filter-pill {{ request('status') === 'contacted' ? 'active' : '' }}">
                        <i class="fa fa-phone text-info"></i> Contacted <span class="badge badge-info ml-1">{{ $stats['contacted'] }}</span>
                    </a>
                    <a href="{{ route('admin.bulk-orders.index', ['status' => 'confirmed']) }}" class="filter-pill {{ request('status') === 'confirmed' ? 'active' : '' }}">
                        <i class="fa fa-check text-primary"></i> Confirmed <span class="badge badge-primary ml-1">{{ $stats['confirmed'] }}</span>
                    </a>
                    <a href="{{ route('admin.bulk-orders.index', ['status' => 'completed']) }}" class="filter-pill {{ request('status') === 'completed' ? 'active' : '' }}">
                        <i class="fa fa-check-double text-success"></i> Completed <span class="badge badge-success ml-1">{{ $stats['completed'] }}</span>
                    </a>
                    
                    <span class="mx-2 text-muted font-weight-bold" style="font-size:13px;">| Source:</span>
                    <a href="{{ route('admin.bulk-orders.index', ['source' => 'ads']) }}" class="filter-pill {{ request('source') === 'ads' ? 'active' : '' }}">
                        <i class="fa fa-bullhorn text-danger"></i> 🎯 Ads Leads <span class="badge badge-danger text-white ml-1">{{ $stats['ads_count'] }}</span>
                    </a>
                    <a href="{{ route('admin.bulk-orders.index', ['source' => 'organic']) }}" class="filter-pill {{ request('source') === 'organic' ? 'active' : '' }}">
                        <i class="fa fa-leaf text-success"></i> 🌱 Organic Leads <span class="badge badge-success text-white ml-1">{{ $stats['organic_count'] }}</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Table Card -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="bulk-leads-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#ID & Date</th>
                                        <th>Source Tag</th>
                                        <th>Customer</th>
                                        <th>Event Details</th>
                                        <th>Location & Pin</th>
                                        <th>Bytz Items / Est.</th>
                                        <th>Mail Trigger Status</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($leads as $lead)
                                    <tr>
                                        <td>
                                            <strong>#{{ $lead->id }}</strong><br>
                                            <small class="text-muted">{{ $lead->created_at->format('d M Y') }}</small><br>
                                            <small class="text-muted">{{ $lead->created_at->format('h:i A') }}</small>
                                        </td>
                                        <td>
                                            {!! $lead->lead_source_badge_html !!}
                                            @if($lead->page_source)
                                                <br><small class="text-muted" style="font-size:10px;">{{ $lead->page_source }}</small>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="customer-avatar">
                                                    {{ strtoupper(substr($lead->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <strong>{{ $lead->name }}</strong><br>
                                                    <a href="tel:{{ $lead->phone }}" class="text-dark font-weight-bold" style="font-size:12px;">
                                                        <i class="fa fa-phone text-success mr-1"></i>{{ $lead->phone }}
                                                    </a><br>
                                                    @if($lead->email)
                                                    <a href="mailto:{{ $lead->email }}" class="text-muted" style="font-size:11px;">
                                                        <i class="fa fa-envelope mr-1"></i>{{ $lead->email }}
                                                    </a>
                                                    @else
                                                    <small class="text-muted font-italic">No email</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-light border font-weight-bold mb-1" style="text-transform:capitalize;">
                                                {{ $lead->event_type }}
                                            </span><br>
                                            <strong class="text-dark" style="font-size:13px;">
                                                <i class="fa fa-calendar-alt text-warning mr-1"></i>{{ $lead->event_date ? $lead->event_date->format('d M Y') : 'N/A' }}
                                            </strong>
                                        </td>
                                        <td>
                                            <div style="max-width: 220px;" class="text-truncate" title="{{ $lead->location }}">
                                                {{ $lead->location }}
                                            </div>
                                            @if($lead->latitude && $lead->longitude)
                                            <a href="https://www.google.com/maps?q={{ $lead->latitude }},{{ $lead->longitude }}" target="_blank" class="badge badge-danger text-white" style="font-size:10px; font-weight:700;">
                                                <i class="fa fa-map-marker-alt mr-1"></i> View on Maps
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <strong class="text-danger" style="font-size:14px;">₹{{ number_format($lead->estimated_total, 0) }}</strong><br>
                                            <small class="text-muted font-weight-bold">{{ $lead->total_items_count }} items</small>
                                            @php $pItems = $lead->parsed_items; @endphp
                                            @if(count($pItems) > 0)
                                            <div class="mt-1">
                                                @foreach(array_slice($pItems, 0, 2) as $pi)
                                                <span class="item-chip">{{ $pi['name'] ?? '' }} ({{ $pi['qty'] ?? 1 }})</span>
                                                @endforeach
                                                @if(count($pItems) > 2)
                                                <span class="item-chip font-weight-bold">+{{ count($pItems) - 2 }} more</span>
                                                @endif
                                            </div>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Admin Mail Status -->
                                            <div class="mb-1">
                                                <small class="text-muted font-weight-bold">Admin Mail:</small><br>
                                                @if($lead->admin_mail_sent)
                                                    <span class="mail-badge-success"><i class="fa fa-check-circle"></i> Sent</span>
                                                @else
                                                    <span class="mail-badge-danger" title="{{ $lead->admin_mail_error }}"><i class="fa fa-times-circle"></i> Failed</span>
                                                @endif
                                            </div>
                                            <!-- Customer Mail Status -->
                                            <div>
                                                <small class="text-muted font-weight-bold">Customer Mail:</small><br>
                                                @if(empty($lead->email))
                                                    <span class="mail-badge-muted"><i class="fa fa-minus"></i> No Email</span>
                                                @elseif($lead->customer_mail_sent)
                                                    <span class="mail-badge-success"><i class="fa fa-check-circle"></i> Sent</span>
                                                @else
                                                    <span class="mail-badge-danger" title="{{ $lead->customer_mail_error }}"><i class="fa fa-times-circle"></i> Failed</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            {!! $lead->status_badge_html !!}
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-outline-primary view-lead-btn" data-id="{{ $lead->id }}" title="View Full Details">
                                                    <i class="fa fa-eye"></i> Details
                                                </button>
                                                <a href="https://wa.me/91{{ preg_replace('/[^0-9]/', '', $lead->phone) }}" target="_blank" class="btn btn-sm btn-outline-success" title="WhatsApp Customer">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger delete-lead-btn" data-id="{{ $lead->id }}" data-name="{{ $lead->name }}" title="Delete Lead">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-5 text-muted">
                                            <i class="fa fa-inbox fa-3x mb-3 text-warning"></i>
                                            <p class="font-weight-bold">No bulk order leads found yet.</p>
                                            <p class="small">When users submit enquiries on <code>/lp/bulk_order</code>, they will appear here in real-time.</p>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== LEAD DETAILS MODAL ==================== -->
<div class="modal fade" id="leadDetailModal" tabindex="-1" aria-labelledby="leadDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title font-weight-bold" id="leadDetailModalLabel">
                    <i class="fa fa-boxes text-warning mr-2"></i> Bulk Order Lead Details <span id="detailLeadId" class="badge badge-warning text-dark ml-2"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <!-- Customer Information -->
                    <div class="col-md-6">
                        <div class="lead-detail-box">
                            <div class="lead-detail-title"><i class="fa fa-user mr-1"></i> Customer Contact</div>
                            <p class="mb-1"><strong>Name:</strong> <span id="detailCustomerName"></span></p>
                            <p class="mb-1"><strong>Lead Source:</strong> <span id="detailLeadSourceBadge"></span> <small id="detailPageSource" class="text-muted ml-1"></small></p>
                            <p class="mb-1"><strong>Phone:</strong> <a id="detailPhoneLink" href="" class="text-success font-weight-bold"><span id="detailCustomerPhone"></span></a></p>
                            <p class="mb-2"><strong>Email:</strong> <span id="detailCustomerEmail"></span></p>
                            <div class="d-flex gap-2">
                                <a id="detailWhatsAppLink" href="" target="_blank" class="btn btn-sm btn-success text-white font-weight-bold mr-2">
                                    <i class="fab fa-whatsapp mr-1"></i> Chat on WhatsApp
                                </a>
                                <a id="detailEmailLink" href="" class="btn btn-sm btn-outline-primary font-weight-bold">
                                    <i class="fa fa-envelope mr-1"></i> Email
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Event Information -->
                    <div class="col-md-6">
                        <div class="lead-detail-box">
                            <div class="lead-detail-title"><i class="fa fa-calendar-alt mr-1"></i> Event & Location</div>
                            <p class="mb-1"><strong>Event Date:</strong> <span id="detailEventDate" class="text-dark font-weight-bold"></span></p>
                            <p class="mb-1"><strong>Event Type:</strong> <span id="detailEventType" class="badge badge-info"></span></p>
                            <p class="mb-1"><strong>Location:</strong> <span id="detailLocation"></span></p>
                            <p class="mb-2"><strong>Coordinates:</strong> <span id="detailCoords" class="text-muted small"></span></p>
                            <a id="detailMapLink" href="" target="_blank" class="btn btn-sm btn-danger text-white font-weight-bold">
                                <i class="fa fa-map-marker-alt mr-1"></i> Open Google Maps Pin
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Ordered Bytz Items Table -->
                <div class="lead-detail-box">
                    <div class="lead-detail-title"><i class="fa fa-burger mr-1"></i> Selected Bytz Items</div>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th>Item Name</th>
                                    <th class="text-center" style="width:80px;">Qty</th>
                                    <th class="text-right" style="width:110px;">Unit Price</th>
                                    <th class="text-right" style="width:120px;">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody id="detailItemsBody">
                                <!-- Populated dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Special Instructions -->
                <div class="lead-detail-box">
                    <div class="lead-detail-title"><i class="fa fa-comment-dots mr-1"></i> Special Requests / Instructions</div>
                    <p id="detailInstructions" class="mb-0 font-italic text-dark"></p>
                </div>

                <!-- Mail Triggered Diagnostics & Resend -->
                <div class="lead-detail-box" style="background:#fcfcfc;">
                    <div class="lead-detail-title"><i class="fa fa-paper-plane mr-1"></i> Email Notification Status</div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <strong>Admin Notification:</strong>
                            <div id="detailAdminMailStatus" class="mt-1"></div>
                            <small id="detailAdminMailError" class="text-danger d-block mt-1" style="display:none;"></small>
                            <button type="button" id="btnResendAdminMail" class="btn btn-sm btn-outline-warning mt-2 btn-resend-ajax" data-type="admin">
                                <i class="fa fa-envelope"></i> Resend to Admin
                            </button>
                        </div>
                        <div class="col-md-6">
                            <strong>Customer Confirmation:</strong>
                            <div id="detailCustomerMailStatus" class="mt-1"></div>
                            <small id="detailCustomerMailError" class="text-danger d-block mt-1" style="display:none;"></small>
                            <button type="button" id="btnResendCustomerMail" class="btn btn-sm btn-outline-info mt-2 btn-resend-ajax" data-type="customer">
                                <i class="fa fa-paper-plane"></i> Resend to Customer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Update Status Form -->
                <form id="updateStatusForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="lead-detail-box" style="background:#fffbee; border-color:#ffeeba;">
                        <div class="lead-detail-title" style="color:#d39e00;"><i class="fa fa-edit mr-1"></i> Update Lead Status & Internal Notes</div>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label class="font-weight-bold small">Status</label>
                                <select name="status" id="detailStatusSelect" class="form-control form-control-sm">
                                    <option value="pending">Pending</option>
                                    <option value="contacted">Contacted</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="completed">Completed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-8 mb-2">
                                <label class="font-weight-bold small">Internal Admin Notes</label>
                                <input type="text" name="admin_notes" id="detailAdminNotes" class="form-control form-control-sm" placeholder="e.g. Quoted 50 combos, customer requested callback tomorrow...">
                            </div>
                        </div>
                        <div class="text-right mt-2">
                            <button type="submit" class="btn btn-warning btn-sm font-weight-bold text-dark">
                                <i class="fa fa-save mr-1"></i> Save Changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== DELETE CONFIRMATION MODAL ==================== -->
<div class="modal fade" id="deleteLeadModal" tabindex="-1" aria-labelledby="deleteLeadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title font-weight-bold" id="deleteLeadModalLabel">
                    <i class="fa fa-exclamation-triangle mr-2"></i> Delete Bulk Order Lead
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="deleteLeadForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <div class="modal-body text-center p-4">
                    <p class="mb-2">Are you sure you want to delete the enquiry from:</p>
                    <h5 id="deleteLeadName" class="font-weight-bold text-danger"></h5>
                    <p class="text-muted small mt-2">This action cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger font-weight-bold">Yes, Delete Lead</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

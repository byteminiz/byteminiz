@extends('layouts.main-site')

@section('title', '503 - Service Unavailable')

@section('header')
<header class="header_wrap fixed-top header_with_topbar light_skin main_menu_uppercase">
    <div class="container">
        @include('partials.nav')
    </div>
</header>
@endsection

@section('content')
<section class="features1" style="padding-top: 150px; padding-bottom: 100px; min-height: 70vh; display: flex; align-items: center; justify-content: center; background-color: #f7f7f7;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1" style="font-size: 8rem; color: #FF2D20; font-weight: bold;">503</h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Service Unavailable</h2>
                <p class="mbr-text mbr-fonts-style display-7">We are currently undergoing scheduled maintenance. We'll be back shortly.</p>
            </div>
        </div>
    </div>
</section>
@endsection

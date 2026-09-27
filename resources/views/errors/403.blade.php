@extends('layouts.main-site')

@section('title', '403 - Access Denied')

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
                <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1" style="font-size: 8rem; color: #FF2D20; font-weight: bold;">403</h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Access Denied</h2>
                <p class="mbr-text mbr-fonts-style display-7">You do not have permission to access this page.</p>
                <div class="mbr-section-btn mt-4">
                    <a class="btn btn-primary display-7" href="{{ route('home') }}" style="background-color: #FF2D20; border-color: #FF2D20;">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

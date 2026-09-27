@extends('layouts.main-site')

@push('styles')


<!-- Animation CSS -->
<link rel="stylesheet" href="/assets/css/animate.css">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="/assets/css/all.min.css">
<link rel="stylesheet" href="/assets/css/ionicons.min.css">
<link rel="stylesheet" href="/assets/css/themify-icons.css">
<link rel="stylesheet" href="/assets/css/linearicons.css">
<link rel="stylesheet" href="/assets/css/flaticon.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="/assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Slick CSS -->
<link rel="stylesheet" href="/assets/css/slick.css">
<link rel="stylesheet" href="/assets/css/slick-theme.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<!-- DatePicker CSS -->
<link href="/assets/css/datepicker.min.css" rel="stylesheet">
<!-- TimePicker CSS -->
<link href="/assets/css/mdtimepicker.min.css" rel="stylesheet">
<!-- Style CSS -->
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<link id="layoutstyle" rel="stylesheet" href="/assets/color/theme-red.css">
@endpush

@push('scripts')
<!-- Latest jQuery -->
<script src="/assets/js/jquery-1.12.4.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="/assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="/assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="/assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="/assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="/assets/js/jquery.countdown.min.js"></script>
<!-- jquery.countTo js  -->
<script src="/assets/js/jquery.countTo.js"></script>
<!-- imagesloaded js -->
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="/assets/js/isotope.min.js"></script>
<!-- jquery.appear js  -->
<script src="/assets/js/jquery.appear.js"></script>
<!-- jquery.dd.min js -->
<script src="/assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="/assets/js/slick.min.js"></script>
<!-- DatePicker js -->
<script src="/assets/js/datepicker.min.js"></script>
<!-- TimePicker js -->
<script src="/assets/js/mdtimepicker.min.js"></script>
<!-- scripts js -->
<script src="/assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endpush


@section('title', 'Menus')


@section('header')
<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar light_skin main_menu_uppercase">
    <div class="container">
        @include('partials.nav')
    </div>
</header>
<!-- END HEADER -->
@endsection

<body>




    <style>
        .cid-uRmPpfUGaC {
            display: flex;
        }

        @media (min-width: 768px) {
            .cid-uRmPpfUGaC {
                align-items: flex-end;
            }

            .cid-uRmPpfUGaC .row {
                justify-content: flex-start;
            }

            .cid-uRmPpfUGaC .content-wrap {
                padding: 1rem 3rem;
            }
        }

        @media (max-width: 991px) and (min-width: 768px) {
            .cid-uRmPpfUGaC .content-wrap {
                min-width: 50%;
            }
        }

        @media (max-width: 767px) {
            .cid-uRmPpfUGaC {
                -webkit-align-items: center;
                align-items: flex-end;
            }

            .cid-uRmPpfUGaC .mbr-row {
                -webkit-justify-content: center;
                justify-content: center;
            }

            .cid-uRmPpfUGaC .content-wrap {
                width: 100%;
            }
        }

        .cid-uRmPpfUGaC .mbr-fallback-image.disabled {
            display: none;
        }

        .cid-uRmPpfUGaC .mbr-fallback-image {
            display: block;
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            background: #000000;
        }

        .cid-uRmPpfUGaC .mbr-section-title,
        .cid-uRmPpfUGaC .mbr-section-subtitle {
            text-align: left;
            color: var(--dominant-color, #ffc091);
        }

        .cid-uRmPpfUGaC .mbr-text,
        .cid-uRmPpfUGaC .mbr-section-btn {
            text-align: left;
        }

        /*  */
    </style>
    <section class="header18 cid-uRmPpfUGaC mbr-fullscreen video-hero-section" id="hero-15-uRmPpfUGaC">

        <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(0, 0, 0); position:fixed; left:0; top:0; width:100vw; height:100vh; z-index:0;">
            <!--<video class="bg-video" autoplay loop muted playsinline poster="" style="object-fit:cover; width:100vw; height:100vh; position:fixed; left:0; top:0; z-index:-1;">-->
            <!--    <source src="{{ asset('storage/videos/banner.mp4') }}" type="video/mp4">-->
            <!--    Your browser does not support the video tag.-->
            <!--</video>-->
            <video class="bg-video" autoplay loop muted playsinline poster="" style="object-fit:cover; width:100vw; height:100vh; position:fixed; left:0; top:0; z-index:-1;">
    <source src="{{ url('public/storage/videos/banner.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>

        </div>
        <div class="container-fluid hero-content" style="position:relative; z-index:1; min-height:100vh; display:flex; align-items:end;">
            <div class="row w-100">
                <div class="content-wrap col-12 col-md-8" style="padding-bottom:4rem;">
                    <h1
                        class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1 animate__animated animate__delay-1s animate__fadeInUp" style="
    font-size: 4.1rem;">
                        <strong style=" color: #fdca00; padding: 10px 20px; border-radius: 8px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3), 0px 4px 12px rgba(0, 0, 0, 0.2);">Veg Mini Burgers</strong>
                    </h1>
                    <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7 animate__animated animate__delay-1s animate__fadeInUp" style=" color: white; padding: 10px 20px; border-radius: 8px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3), 0px 4px 12px rgba(0, 0, 0, 0.2);"><strong>The best mini burgers, delivered fast.</strong></p>
                    <div class="px-4 mbr-section-btn">
                        <a class=" btn btn-warning-outline display-7 animate__animated animate__delay-1s animate__fadeInUp"
                            style="background-color: #fdca00 !important; color: #ffff; padding: 10px 20px; border-radius: 8px; 
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3), 0px 4px 12px rgba(0, 0, 0, 0.2);"
                            href="{{ route('bytemenu') }}"><strong>Order Now</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>


        <!-- testimonials -->

        <div class="container py-2" id="testimonials">
            <div class="row align-items-center">
                <!-- Left: Testimonials Carousel -->
                <div class="col-12 col-md-8 mb-4 mb-md-0">
                    <div class="row">
                        <h2 class="mb-4 d-flex align-items-center flex-wrap">
                            <span class="me-2">What Our Customers</span>
                            <img style="width:50px; height:50px;" src="https://lh3.googleusercontent.com/d/1BCDiCFnQ5657E9Cy-Yhnf70G9s04UrkG" alt="" class="me-2">
                            <span>Say</span>
                        </h2>
                    </div>

                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <p class="fs-5 mb-1">"The best burgers in town! Super fresh and tasty every single time."</p>
                                <p class="fw-bold mb-0">- Rahul Verma</p>
                            </div>

                            <div class="carousel-item">
                                <p class="fs-5 mb-1">"Incredible flavor, speedy service, and amazing value for money. Highly recommend!"</p>
                                <p class="fw-bold mb-0">- Aisha Khan</p>
                            </div>

                            <div class="carousel-item">
                                <p class="fs-5 mb-1">"This is my go-to place whenever I crave burgers. Consistently delicious."</p>
                                <p class="fw-bold mb-0">- Sameer Joshi</p>
                            </div>

                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" style="color:#000000;" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- Right: Static Burger Image -->
                <div class="col-12 col-md-4 text-center">
                    <img src="https://lh3.googleusercontent.com/d/12ltI68hoiOEQ54-ozEv1Es6vXGXFMJO3" alt="Delicious Burger" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <hr>








    </section>




    <style>
        .cid-uRmPpfUoVB {
            padding-top: 6rem;
            padding-bottom: 6rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfUoVB .item-wrapper img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50% !important;
        }

        .cid-uRmPpfUoVB .item-wrapper {
            margin-bottom: 2rem;
        }

        .cid-uRmPpfUoVB .card-title,
        .cid-uRmPpfUoVB .iconfont-wrapper {
            color: #000000;
        }

        .cid-uRmPpfUoVB .card-text {
            color: #000000;
            text-align: center;
        }

        .cid-uRmPpfUoVB .content-head {
            max-width: 800px;
        }

        .cid-uRmPpfUoVB .mbr-section-title {
            color: #000000;
        }

        .cid-uRmPpfUoVB .card-title,
        .cid-uRmPpfUoVB .img-wrapper {
            text-align: center;
        }

        .cid-uRmPpfUoVB .img-wrapper {
            display: flex;
            justify-content: center;
        }
    </style>
    <!-- <section class="people05 cid-uRmPpfUoVB" id="testimonials-5-uRmPpfUoVB">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-12 mb-0 content-head">
          <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
            <strong>Raves</strong>
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="item features-without-image col-12 col-md-6 col-lg-4 active">
          <div class="item-wrapper">
            <div class="card-box align-left">
              <p class="card-text mbr-fonts-style display-7">
                The mini burgers are delicious and perfect for a quick snack.
              </p>
              <div class="img-wrapper mt-4 mb-3">
                <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1607556114526-058f5efdf49e%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;7bTvW8o7nmKhS5l9rCERm59_iWAnSiND9W14zxHQnVM" data-slide-to="0" data-bs-slide-to="0">
              </div>
              <h5 class="card-title mbr-fonts-style display-7">
                <strong>John Smith</strong>
              </h5>
            </div>
          </div>
        </div>
        <div class="item features-without-image col-12 col-md-6 col-lg-4">
          <div class="item-wrapper">
            <div class="card-box align-left">
              <p class="card-text mbr-fonts-style display-7">
                I love the variety of flavors. The delivery is always on time.
              </p>
              <div class="img-wrapper mt-4 mb-3">
                <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1564972379941-fde999e14945%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;jtrFBNxqvmI2uZGolB7O8hXeEA2_2bl1aqJFBs7R8Yg" data-slide-to="1" data-bs-slide-to="1">
              </div>
              <h5 class="card-title mbr-fonts-style display-7">
                <strong>Emily White</strong>
              </h5>
            </div>
          </div>
        </div>
        <div class="item features-without-image col-12 col-md-6 col-lg-4">
          <div class="item-wrapper">
            <div class="card-box align-left">
              <p class="card-text mbr-fonts-style display-7">
                Great value for money. The ingredients are always fresh.
              </p>
              <div class="img-wrapper mt-4 mb-3">
                <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1509098681029-b45e9c845022%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;isdWVq50UBG2b84MmaupMNXMhdiniETW62MBm8AOZ8Q" data-slide-to="2" data-bs-slide-to="2">
              </div>
              <h5 class="card-title mbr-fonts-style display-7">
                <strong>Michael Green</strong>
              </h5>
            </div>
          </div>
        </div>
        <div class="item features-without-image col-12 col-md-6 col-lg-4">
          <div class="item-wrapper">
            <div class="card-box align-left">
              <p class="card-text mbr-fonts-style display-7">
                The best burgers in town. I highly recommend them.
              </p>
              <div class="img-wrapper mt-4 mb-3">
                <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1629085265617-aa802730c749%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;KDFhiyaeu6BhP4mu9QwCHCZGpgBmBr5P3pLLZAu74uU" data-slide-to="4" data-bs-slide-to="5">
              </div>
              <h5 class="card-title mbr-fonts-style display-7">
                <strong>Jessica Brown</strong>
              </h5>
            </div>
          </div>
        </div>
        <div class="item features-without-image col-12 col-md-6 col-lg-4">
          <div class="item-wrapper">
            <div class="card-box align-left">
              <p class="card-text mbr-fonts-style display-7">
                The WhatsApp order confirmation is very convenient.
              </p>
              <div class="img-wrapper mt-4 mb-3">
                <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1694026307715-0d3709e69adf%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;wkIeN2WiE2_eloixsctKMJTt8WNbUqgCTVA4lu49WKc" data-slide-to="6" data-bs-slide-to="6">
              </div>
              <h5 class="card-title mbr-fonts-style display-7">
                <strong>David Black</strong>
              </h5>
            </div>
          </div>
        </div>
        <div class="item features-without-image col-12 col-md-6 col-lg-4">
          <div class="item-wrapper">
            <div class="card-box align-left">
              <p class="card-text mbr-fonts-style display-7">
                Excellent customer service. They are always ready to help.
              </p>
              <div class="img-wrapper mt-4 mb-3">
                <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1568530134868-5d89f49d5a72%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;99JejyJrdPfjvMJSYmHY1y_Uxep45k8CokbMO5_N6Dc" data-slide-to="7" data-bs-slide-to="7">
              </div>
              <h5 class="card-title mbr-fonts-style display-7">
                <strong>Ashley Gray</strong>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <style>
        .cid-uRmPpfUJ0S {
            padding-top: 2rem;
            padding-bottom: 2rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfUJ0SCat {
            padding-top: 0.5rem;
            background-color: #ffffffff;
        }

        .cid-uRmPpfUJ0S .item-subtitle {
            line-height: 1.2;
            color: #000000;
        }

        .cid-uRmPpfUJ0S img,
        .cid-uRmPpfUJ0S .item-img {
            width: 100%;
            height: 100%;
            height: 400px;
            object-fit: cover;
        }

        .cid-uRmPpfUJ0S .item:focus,
        .cid-uRmPpfUJ0S span:focus {
            outline: none;
        }

        .cid-uRmPpfUJ0S .item {
            margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfUJ0S .item {
                margin-bottom: 1rem;
            }
        }

        .cid-uRmPpfUJ0S .item-wrapper {
            position: relative;
            border-radius: 4px;
            height: 100%;
            display: flex;
            flex-flow: column nowrap;
        }

        .cid-uRmPpfUJ0S .mbr-section-title {
            color: #232323;
        }

        .cid-uRmPpfUJ0S .mbr-text,
        .cid-uRmPpfUJ0S .mbr-section-btn {
            color: #232323;
        }

        .cid-uRmPpfUJ0S .item-title {
            color: #232323;
        }

        .cid-uRmPpfUJ0S .content-head {
            max-width: 800px;
        }
    </style>
    <section class="features03 cid-uRmPpfUJ0S" id="news-1-uRmPpfUJ0S">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-12 content-head">
                    <div class="mbr-section-head">
                        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong style=" color: #000000; padding: 10px 20px; border-radius: 8px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3), 0px 4px 12px rgba(0, 0, 0, 0.2);">Top Selling ByteMiniz</strong>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item features-image col-12 col-md-6 col-lg-3 active">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="https://lh3.googleusercontent.com/d/1Fx-zrDsAJL8rDpWOXbyUgEmIs3jmiYjs">
                        </div>
                        <div class="item-content align-left">
                            <p class="mbr-text mbr-fonts-style mb-3 display-7">Our new burgers are a taste sensation. Try the new flavors today!</p>
                            <div class="mbr-section-btn item-footer text-center">
                                <a href="{{ route('bytemenu') }}" class="btn item-btn btn-primary display-7 w-90">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img ">
                            <img src="https://lh3.googleusercontent.com/d/1F8l6ZP0q2Fn4tpI_CbDRRsF5kdU7lyWs">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-3 display-7">We now deliver across the whole city. Check if we deliver to you!</p>
                            <div class="mbr-section-btn item-footer text-center">
                                <a href="{{ route('bytemenu') }}" class="btn item-btn btn-primary display-7 w-90">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img ">
                            <img src="https://lh3.googleusercontent.com/d/1hz726UR42eVto-dq6BGmFjsqw_NI9L4T">
                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-3 display-7">Get 20% off your first order. Don&#x27;t miss out on this great deal!</p>
                            <div class="mbr-section-btn item-footer text-center">
                                <a href="{{ route('bytemenu') }}" class="btn item-btn btn-primary display-7 w-90">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item features-image col-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img ">
                            <img src="https://lh3.googleusercontent.com/d/1Oh5Sr626VBApzCmtLKvPz16mFYku9T0G">

                        </div>
                        <div class="item-content align-left">
                            <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
                            </h6>
                            <p class="mbr-text mbr-fonts-style mb-3 display-7">We are committed to using only the freshest ingredients. Taste the difference!</p>
                            <div class="mbr-section-btn item-footer text-center">
                                <a href="{{ route('bytemenu') }}" class="btn item-btn btn-primary display-7 w-90">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <style>
        .cid-uRmPpfUzVM {
            padding-top: 6rem;
            padding-bottom: 6rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfUzVM .item:focus,
        .cid-uRmPpfUzVM span:focus {
            outline: none;
        }

        .cid-uRmPpfUzVM .container-fluid {
            padding-left: 0;
            padding-right: 0;
            overflow: hidden;
        }

        .cid-uRmPpfUzVM .content-head {
            max-width: 800px;
        }

        .cid-uRmPpfUzVM .item {
            color: #232323;
            min-height: 90px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .cid-uRmPpfUzVM .item {
                min-height: 45px;
            }
        }
    </style>
    <section class="gallery10 cid-uRmPpfUzVM" id="features-61-uRmPpfUzVM">
        <div class="container-fluid">
            <div class="loop-container">
                <div class="item display-1" data-linewords="
          Quality Burgers *
          Fresh Ingredients *
          Quick Delivery *
          Affordable Prices *
          Tasty Options *
          Mini Size *"
                    data-direction="-1" data-speed="0.05">
                </div>
                <div class="item display-1" data-linewords="
          Quality Burgers *
          Fresh Ingredients *
          Quick Delivery *
          Affordable Prices *
          Tasty Options *
          Mini Size *"
                    data-direction="-1" data-speed="0.05">
                </div>
            </div>
        </div>
    </section>
    <style>
        .cid-uRmPpfUDT4 {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: transparent;
        }

        .cid-uRmPpfUDT4 img,
        .cid-uRmPpfUDT4 .item-img {
            width: 100%;
            height: 100%;
            height: 400px;
            object-fit: cover;
        }

        .cid-uRmPpfUDT4 .item-img:hover img {}

        .cid-uRmPpfUDT4,
        .item:hover,
        .item:focus,
        .cid-uRmPpfUDT4 span:focus {
            outline: none;
            transform: scale(1.02);

        }

        .cid-uRmPpfUDT4 .item {
            margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfUDT4 .item {
                margin-bottom: 1rem;
            }
        }

        .cid-uRmPpfUDT4 .item-content {
            margin-top: 2rem;
            padding: 0 2.25rem 2.25rem;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .cid-uRmPpfUDT4 .item-content {
                padding: 2rem 1.5rem;
                padding-top: 1rem;
                margin-top: 1rem;
            }
        }

        @media (max-width: 767px) {
            .cid-uRmPpfUDT4 .item-content {
                padding: 2rem 1.5rem;
                padding-top: 1rem;
                margin-top: 1rem;
            }
        }

        .cid-uRmPpfUDT4 .item-wrapper {
            position: relative;
            background: #ffffff;
            height: 100%;
            display: flex;
            flex-flow: column nowrap;

        }

        .cid-uRmPpfUDT4 .item-wrapper .item-footer {
            margin-top: auto;
        }

        .cid-uRmPpfUDT4 .mbr-section-title {
            color: #000000;
        }

        .cid-uRmPpfUDT4 .item-title {
            text-align: left;
        }

        .cid-uRmPpfUDT4 .item-subtitle {
            text-align: left;
        }

        .cid-uRmPpfUDT4 .mbr-text,
        .cid-uRmPpfUDT4 .item .mbr-section-btn {
            text-align: left;
        }

        .cid-uRmPpfUDT4 .content-head {
            max-width: 800px;
        }
        		
    </style>
    <style>
     label.price {
            position: absolute;
            z-index: 10;
            /* ðŸ‘ˆ this is key */
            font-weight: 600;
            top: 395px;
            right: 7px;
            margin-left: 15px;
            display: inline-block;
            width: 120px;
            height: 40px;
            line-height: 40px;
            font-size: 24px;
            background: #FFDC40;
            text-shadow: 1px 1px rgba(255, 255, 255, 0.2);
            border-radius: 0 3px 2px 0px;
        }

        label.price:after {
            content: "";
            position: absolute;
            right: 100%;
            bottom: 0;
            width: 0;
            height: 0;
            display: inline-block;
            line-height: 0;
            border-width: 20px;
            border-style: solid;
            border-color: #FFDC40 #FFDC40 #FFDC40 transparent;
        }

        label.price:before {
            content: '';
            position: absolute;
            bottom: 6px;
            width: 120px;
            left: -35px;
            height: 4px;
            box-shadow: 0 5px 14px rgba(255, 255, 255, 0.4);
            z-index: -1;
            transform: skew(-5deg) rotate(-5deg);
        }
        </style>
    <section class="pricing02 cid-uRmPpfUDT4" id="product-list-9-uRmPpfUDT4">
        <div class="container-fluid">
            @foreach ($categories as $category)
            <div class="features03 cid-uRmPpfUJ0SCat" id="news-1-uRmPpfUJ0S">
                <div class="container-fluid">
                    <div class="row justify-content-center mb-5">


                        <div class="col-12 content-head">
                            <div class="mbr-section-head">
                                <h4 class="mbr-section-title mbr-fonts-style  align-center mb-0 display-2">
                                    <strong class="text-center" style=" color: #000000; padding: 10px 20px; border-radius: 8px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3), 0px 4px 12px rgba(0, 0, 0, 0.2);font-size: 2.5rem !important;"> {{ $category->name }}</strong>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-4">
                @foreach ($category->menus as $menu)
                @php
                // Original calculated slash price (before formatting)
                $rawSlashPrice = round($menu->price * 1.75);

                // Force the slash price to end in 9
                $slashPrice = $rawSlashPrice;
                if ($slashPrice % 10 !== 9) {
                $slashPrice = $slashPrice - ($slashPrice % 10) + 9;
                if ($slashPrice <= $menu->price) {
                    $slashPrice += 10; // Ensure slash price is still greater than actual price
                    }
                    }

                    // Calculate the actual discount percentage
                    $discount = 100 - round(($menu->price / $slashPrice) * 100);
                    @endphp
                    <div class="item features-image col-12 col-md-6 col-lg-4">
                        <label class="price">{{ $discount }}% off</label>

                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ drive_url($menu->image) }}">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5">
                                    <strong>{{ $menu->name }}</strong>
                                </h5>

                                <h6 class="item-subtitle mbr-fonts-style display-7">
                                    <span class="fs-5 " style="text-decoration: line-through; color: gray; float:right;"> &#8377;{{ $slashPrice }}</span>
                                    <strong class="fs-30 float-end">  &#8377;{{ $menu->price }}</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7" style="text-align: justify;">
                                    {{ $menu->description }}
                                </p>
                                <div class="mbr-section-btn item-footer">
                                    <a href="{{ route('menu.item', $menu->id) }}" class="btn text-center item-btn btn-primary display-7">Add Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            @endforeach
        </div>
    </section>
    <!-- Lead Capture Form Section -->
    <section class="lead-form-section" style="background: #fffbe6; padding: 3rem 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="mb-4 text-center">Get in Touch / Order Now</h2>
                    <form id="leadForm" method="POST" action="{{ route('lead.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <input type="hidden" name="type" id="leadType" value="submit">
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success" onclick="document.getElementById('leadType').value='submit'">Submit</button>
                            <button type="submit" class="btn btn-warning" onclick="document.getElementById('leadType').value='order_now'">Order Now</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderNowModal">Order Now (Modal)</button>
                        </div>
                    </form>
                    <div id="leadFormMsg" class="mt-3"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Order Now Form -->
    <div class="modal fade" id="orderNowModal" tabindex="-1" aria-labelledby="orderNowModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderNowModalLabel">Order Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="modalOrderForm" method="POST" action="{{ route('lead.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="modal_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="modal_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="modal_email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="modal_email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="modal_phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="modal_phone" name="phone" required>
                        </div>
                        <input type="hidden" name="type" value="order_now">
                        <button type="submit" class="btn btn-warning w-100">Order Now</button>
                    </form>
                    <div id="modalOrderMsg" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // AJAX for main form
        const leadForm = document.getElementById('leadForm');
        if (leadForm) {
            leadForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(leadForm);
                fetch(leadForm.action, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': formData.get('_token'),
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        document.getElementById('leadFormMsg').innerHTML = data.success ? '<div class="alert alert-success">' + data.message + '</div>' : '<div class="alert alert-danger">Error</div>';
                        if (data.success) leadForm.reset();
                    })
                    .catch(() => {
                        document.getElementById('leadFormMsg').innerHTML = '<div class="alert alert-danger">Error</div>';
                    });
            });
        }
        // AJAX for modal form
        const modalOrderForm = document.getElementById('modalOrderForm');
        if (modalOrderForm) {
            modalOrderForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(modalOrderForm);
                fetch(modalOrderForm.action, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': formData.get('_token'),
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        document.getElementById('modalOrderMsg').innerHTML = data.success ? '<div class="alert alert-success">' + data.message + '</div>' : '<div class="alert alert-danger">Error</div>';
                        if (data.success) modalOrderForm.reset();
                    })
                    .catch(() => {
                        document.getElementById('modalOrderMsg').innerHTML = '<div class="alert alert-danger">Error</div>';
                    });
            });
        }
    </script>
    <style>
        .cid-uRmPpfU4lq {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfU4lq .item-subtitle {
            line-height: 1.2;
            color: #000000;
        }

        .cid-uRmPpfU4lq img,
        .cid-uRmPpfU4lq .item-img {
            width: 100%;
        }

        .cid-uRmPpfU4lq .item:focus,
        .cid-uRmPpfU4lq span:focus {
            outline: none;
        }

        .cid-uRmPpfU4lq .item {
            margin-bottom: 2rem;
        }

        @media (max-width: 575px) {
            .cid-uRmPpfU4lq .item {
                margin-bottom: 1rem;
            }
        }

        .item-wrapper,
        img {
            border-radius: 10px !important;
        }

        .cid-uRmPpfU4lq .item-wrapper {
            position: relative;
            border-radius: 4px;
            height: 100%;
            display: flex;
            flex-flow: column nowrap;

        }

        .cid-uRmPpfU4lq .mbr-section-title {
            color: #000000;
        }

        .cid-uRmPpfU4lq .mbr-text,
        .cid-uRmPpfU4lq .mbr-section-btn {
            color: #000000;
        }

        .cid-uRmPpfU4lq .item-title {
            color: #000000;
            text-align: center;
        }

        .cid-uRmPpfU4lq .content-head {
            max-width: 800px;
        }

        .cid-uRmPpfU4lq img {
            filter: grayscale(1);
            width: 2rem;
            height: 2.2rem;
            object-fit: cover;
            align-self: center;
            transition: filter 0.3s ease;
        }

        .cid-uRmPpfU4lq img:hover {
            filter: grayscale(0);
        }
    </style>
    <section class="features03 cid-uRmPpfU4lq" id="partners-1-uRmPpfU4lq">
        <div class="container-fluid" id="partners">
            <div class="row justify-content-center mb-5">
                <div class="col-12 content-head">
                    <div class="mbr-section-head">
                        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>Our Food Delivery Partners</strong>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">

                <!-- Zomato -->
                <div class="item features-image col-6 col-md-3 col-lg-2 text-center mb-4">
                    <div class="item-wrapper">
                        <div class="item-img px-5">
                            <img src="https://lh3.googleusercontent.com/d/1KvKt46hbeUib0wodLp1UyBAe6K1Jrvvk" alt="Zomato" style="width: 100px;">
                        </div>
                    </div>
                </div>

                <!-- Swiggy -->
                <div class="item features-image col-6 col-md-3 col-lg-2 text-center mb-4">
                    <div class="item-wrapper">
                        <div class="item-img px-5">
                            <img src="https://lh3.googleusercontent.com/d/1Fk8kfsOYyugDh10d1oSW-Xt3jYclVDBu" alt="Swiggy" style="width: 100px;">
                        </div>
                    </div>
                </div>

                <!-- Magicpin -->
                <div class="item features-image col-6 col-md-3 col-lg-2 text-center mb-4">
                    <div class="item-wrapper">
                        <div class="item-img px-5">
                            <img src="https://lh3.googleusercontent.com/d/1Qhlu-qYKgaDE9ofHoyKFcAIFqGRkxND8" alt="Magicpin" style="width: 100px;">
                        </div>
                    </div>
                </div>

                <!-- Ola Food -->
                <div class="item features-image col-6 col-md-3 col-lg-2 text-center mb-4">
                    <div class="item-wrapper">
                        <div class="item-img px-5">
                            <img src="https://lh3.googleusercontent.com/d/11Mt_Esij0nJZiLj-WOfoS8W5Vr3eNtK6" alt="Ola Food" style="width: 100px;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .cid-uRmPpfVWQF {
            padding-top: 6rem;
            padding-bottom: 6rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfVWQF .item:focus,
        .cid-uRmPpfVWQF span:focus {
            outline: none;
        }

        .cid-uRmPpfVWQF .item {
            cursor: pointer;
        }

        .cid-uRmPpfVWQF .grid-container {
            grid-row-gap: 2rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVWQF .grid-container {
                grid-row-gap: 1rem;
            }
        }

        .cid-uRmPpfVWQF .grid-container-1,
        .cid-uRmPpfVWQF .grid-container-2 {
            gap: 0 2rem;
        }

        @media (max-width: 767px) {

            .cid-uRmPpfVWQF .grid-container-1,
            .cid-uRmPpfVWQF .grid-container-2 {
                gap: 0 1rem;
            }
        }

        .cid-uRmPpfVWQF .mbr-section-title {
            color: #000000;
        }

        .cid-uRmPpfVWQF .mbr-text,
        .cid-uRmPpfVWQF .mbr-section-btn {
            color: #000000;
        }

        .cid-uRmPpfVWQF .content-head {
            max-width: 800px;
        }

        .cid-uRmPpfVWQF .container,
        .cid-uRmPpfVWQF .container-fluid {
            overflow: hidden;
        }

        .cid-uRmPpfVWQF .grid-container {
            display: grid;
            transform: translate3d(-3rem, 0, 0);
            width: 115vw;
            grid-column-gap: 1rem;
        }

        .cid-uRmPpfVWQF .grid-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cid-uRmPpfVWQF .grid-item img {
            min-width: 30vw;
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVWQF .grid-item img {
                min-width: 35vw;
            }
        }

        .cid-uRmPpfVWQF .grid-container-1,
        .cid-uRmPpfVWQF .grid-container-2 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-columns: 1fr;
            grid-auto-flow: column;
        }

        .cid-uRmPpfVWQF .grid-container-1 {
            align-items: flex-end;
        }

        .cid-uRmPpfVWQF .grid-container-2 {
            align-items: flex-start;
        }
    </style>
    <section class="gallery4 cid-uRmPpfVWQF" id="gallery-12-uRmPpfVWQF">
        <div class="container-fluid gallery-wrapper">
            <div class="grid-container">
                <div class="grid-container-1" style="transform: translate3d(-200px, 0px, 0px);">
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1692737347720-90de4c1862d6%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8MjF8fGJ1cmdlcnN8ZW58MHwwfHx8MTc1Mjg5ODc1N3ww%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;Qupe-_8RVXc7jTZYAOpgliNho73os9Pm2FpUAJO6jYw">
                    </div>
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1594212699903-ec8a3eca50f5%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8N3x8YnVyZ2Vyc3xlbnwwfDB8fHwxNzUyODk4NzU3fDA%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;WuxhaL-LdWxRFNNdbGYlvSnrGydNY-jk-HJPsuckISk">
                    </div>
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1610614991969-ceeb293e7ff5%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8MTB8fGJ1cmdlcnN8ZW58MHwwfHx8MTc1Mjg5ODc1N3ww%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;nWrmJh4xNKiXVPQtTTf0o0flf1dpW3wmccR6McNXHZc">
                    </div>
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1428660386617-8d277e7deaf2%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8MXx8YnVyZ2Vyc3xlbnwwfDB8fHwxNzUyODk4NzU3fDA%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;JiKOOkpsJHdfLazCVqOcyD9Yx-ZXXfSIBLMFuT3Ibe8">
                    </div>
                </div>
                <div class="grid-container-2" style="transform: translate3d(-70px, 0px, 0px);">
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1586816001966-79b736744398%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8MjJ8fGJ1cmdlcnN8ZW58MHwwfHx8MTc1Mjg5ODc1N3ww%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;Hf9BE0TssoFjmajF5lhNEm8kWanJqGQYouHbDhc5W8c">
                    </div>
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1553979459-d2229ba7433b%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8MTd8fGJ1cmdlcnN8ZW58MHwwfHx8MTc1Mjg5ODc1N3ww%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;pRRh5TY4Ldnmi1cEAhbOieS40IeNVefKrO3qXHy_6tQ">
                    </div>
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1585730315692-5252e57d4b40%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8NXx8YnVyZ2Vyc3xlbnwwfDB8fHwxNzUyODk4NzU3fDA%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;EiY_8I1qQvAwSYFSS8f8mUoYMr2Sb-3Sx11NP06yWgs">
                    </div>
                    <div class="grid-item">
                        <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1651899468266-6779fd086554%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8MTl8fGJ1cmdlcnN8ZW58MHwwfHx8MTc1Mjg5ODc1N3ww%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;CRhfK3Kxi_EA9EkZAXbBVtUY3c_O-6AgvWWZy-psa7I">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .cid-uRmPpfVlbb {
            overflow: hidden;
            background-image: url("https://proxy.electricblaze.com/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1561758033-d89a9ad46330%3Fixid%3DM3w0Mzc5fDB8MXxzZWFyY2h8MTF8fGJ1cmdlcnN8ZW58MHwwfHx8MTc1Mjg5ODc1N3ww%26ixlib%3Drb-4.1.0%26auto%3Dformat%26fit%3Dcrop%26w%3D1200%26q%3D80&e=1757376000&s=p2huERK1CMxjLKpKP6dkW1ZNRDMg8WfeuyEOSAbD7Co");
        }
    </style>
    <section class="image02 cid-uRmPpfVlbb mbr-fullscreen mbr-parallax-background" id="image-13-uRmPpfVlbb">
        <div class="container">
            <div class="row"></div>
        </div>
    </section>
    <style>
        .cid-uRmPpfVdtD .mbr-fallback-image.disabled {
            display: none;
        }

        .cid-uRmPpfVdtD .mbr-fallback-image {
            display: block;
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            background: #000000;
        }
    </style>
    <section class="header18 cid-uRmPpfVdtD mbr-fullscreen" data-bg-video="https://www.youtube.com/embed/Vqi-ryUjlvk?autoplay&#x3D;1&amp;loop&#x3D;1&amp;playlist&#x3D;Vqi-ryUjlvk&amp;t&#x3D;20&amp;mute&#x3D;1&amp;playsinline&#x3D;1&amp;controls&#x3D;0&amp;showinfo&#x3D;0&amp;autohide&#x3D;1&amp;allowfullscreen&#x3D;true&amp;mode&#x3D;transparent" id="video-5-uRmPpfVdtD">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </section>
    <style>
        .cid-uRmPpfVfaL {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: transparent;
        }

        .cid-uRmPpfVfaL .mbr-iconfont {
            font-size: 1.2rem !important;
            font-family: 'Moririse2' !important;
            color: white;
            transition: all 0.3s;
            transform: rotate(180deg);
        }

        .cid-uRmPpfVfaL .panel-group {
            border: none;
        }

        .cid-uRmPpfVfaL .card-header {
            padding: 1.2rem 0.5rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVfaL .card-header {
                padding: 1rem 0rem;
            }
        }

        .cid-uRmPpfVfaL .panel-body {
            padding: 0 0.5rem;
            padding-bottom: 1rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVfaL .panel-body {
                padding: 0rem;
                padding-bottom: 1rem;
            }
        }

        .cid-uRmPpfVfaL .img-col {
            padding: 0;
        }

        .cid-uRmPpfVfaL .img-item {
            height: 100%;
        }

        .cid-uRmPpfVfaL img {
            height: 100%;
            object-fit: cover;
        }

        .cid-uRmPpfVfaL .collapsed span {
            transform: rotate(0deg);
        }

        .cid-uRmPpfVfaL .panel-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cid-uRmPpfVfaL p {
            margin-bottom: 0.3rem;
        }

        .cid-uRmPpfVfaL .card .card-header {
            background-color: transparent;
            margin-bottom: 0;
            border: 0;
            border-radius: 2rem;
        }

        .cid-uRmPpfVfaL .card {
            background: #ffffff;
            padding: 1rem 2rem;
            border-radius: 2rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVfaL .card {
                padding: 1.5rem;
            }
        }

        .cid-uRmPpfVfaL .panel-text {
            color: #000000;
        }

        .cid-uRmPpfVfaL .mbr-section-title {
            text-align: center;
            color: #000000;
        }

        .cid-uRmPpfVfaL .mbr-section-subtitle {
            color: #000000;
            text-align: center;
        }

        .cid-uRmPpfVfaL .panel-title-edit,
        .cid-uRmPpfVfaL .mbr-iconfont {
            color: #000000;
        }
    </style>
    <section class="list1 cid-uRmPpfVfaL" id="faq-1-uRmPpfVfaL">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-10 m-auto">
                    <div class="content">
                        <div class="mbr-section-head align-left mb-5">
                            <h3 class="mbr-section-title mb-2 mbr-fonts-style display-2">
                                <strong>Burger FAQs</strong>
                            </h3>
                        </div>
                        <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_0" aria-expanded="false" aria-controls="collapse1">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            How long are burgers fresh?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse1_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Our burgers stay fresh for 2 days in the fridge.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_0" aria-expanded="false" aria-controls="collapse2">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            Are burgers gluten-free?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse2_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Yes, all our burgers are gluten-free.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_0" aria-expanded="false" aria-controls="collapse3">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            What is delivery radius?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse3_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            We deliver within a 10-mile radius.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_0" aria-expanded="false" aria-controls="collapse4">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            What are payment options?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse4_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            You can pay via card or cash.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_0" aria-expanded="false" aria-controls="collapse5">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                            How long is delivery?
                                        </h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse5_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">
                                            Delivery usually takes 30 minutes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .cid-uRmPpfVnMR {
            padding-top: 3rem;
            padding-bottom: 3rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfVnMR .mbr-fallback-image.disabled {
            display: none;
        }

        .cid-uRmPpfVnMR .item-wrapper {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .cid-uRmPpfVnMR .mbr-fallback-image {
            display: block;
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
        }

        .cid-uRmPpfVnMR .mbr-iconfont {
            display: inline-flex;
            font-size: 2rem;
            color: var(--primary-color, #d70081);
            width: 80px;
            justify-content: center;
            align-items: center;
            background: #ffd7ef;
            height: 80px;
            border-radius: 50%;
        }

        .cid-uRmPpfVnMR .card-title,
        .cid-uRmPpfVnMR .iconfont-wrapper {
            color: var(--primary-color, #d70081);
            text-align: center;
        }

        .cid-uRmPpfVnMR .card-text {
            color: #000000;
            text-align: center;
        }

        .cid-uRmPpfVnMR .content-head {
            max-width: 800px;
        }

        .cid-uRmPpfVnMR .mbr-section-title {
            color: #000000;
        }
    </style>
    <section class="features10 cid-uRmPpfVnMR" id="metrics-2-uRmPpfVnMR">
        <div class="container">
            <div class="row justify-content-center">
                <div class="item features-without-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="card-box align-left">
                            <p class="card-title mbr-fonts-style display-1 mb-3">
                                <strong>500+</strong>
                            </p>
                            <p class="card-text mbr-fonts-style mb-3 display-7">
                                Served Daily
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="card-box align-left">
                            <p class="card-title mbr-fonts-style display-1 mb-3">
                                <strong>100K+</strong>
                            </p>
                            <p class="card-text mbr-fonts-style mb-3 display-7">
                                Happy Customers
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="card-box align-left">
                            <p class="card-title mbr-fonts-style display-1 mb-3">
                                <strong>15</strong>
                            </p>
                            <p class="card-text mbr-fonts-style mb-3 display-7">
                                Cities Covered
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .cid-uRmPpfVXfV {
            display: flex;
            padding-top: 6em;
            padding-bottom: 5em;
            background-color: var(--dominant-color, #393193);
        }

        .cid-uRmPpfVXfV .mbr-fallback-image.disabled {
            display: none;
        }

        .cid-uRmPpfVXfV .mbr-fallback-image {
            display: block;
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
        }

        @media (min-width: 768px) {
            .cid-uRmPpfVXfV {
                align-items: center;
            }

            .cid-uRmPpfVXfV .row {
                justify-content: center;
            }
        }

        @media (max-width: 991px) and (min-width: 768px) {
            .cid-uRmPpfVXfV .content-wrap {
                min-width: 50%;
            }
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVXfV {
                -webkit-align-items: center;
                align-items: center;
            }

            .cid-uRmPpfVXfV .mbr-row {
                -webkit-justify-content: center;
                justify-content: center;
            }

            .cid-uRmPpfVXfV .content-wrap {
                width: 100%;
                max-width: 800px;
            }
        }

        .cid-uRmPpfVXfV .mbr-section-title {
            text-align: center;
            color: var(--dominant-text, #ffffff);
        }

        .cid-uRmPpfVXfV .mbr-text,
        .cid-uRmPpfVXfV .mbr-section-btn {
            text-align: center;
            color: var(--dominant-text, #ffffff);
        }
    </style>
    <section class="header09 startm5 cid-uRmPpfVXfV" id="call-to-action-2-uRmPpfVXfV">
        <div class="container-fluid">
            <div class="row">
                <div class="content-wrap col-12 col-md-6">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-2">
                        <strong>Order Now!</strong>
                    </h1>
                    <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">
                        Taste the future, today!
                    </p>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-7" href="#">Get Burgers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .cid-uRmPpfVecc {
            padding-top: 5rem;
            padding-bottom: 3rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfVecc .item-subtitle {
            line-height: 1.2;
            color: #000000;
            text-align: center;
        }

        .cid-uRmPpfVecc img,
        .cid-uRmPpfVecc .item-img {
            width: 100%;
            height: 100%;
            height: 400px;
            object-fit: cover;
        }

        .cid-uRmPpfVecc .item:focus,
        .cid-uRmPpfVecc span:focus {
            outline: none;
        }

        .cid-uRmPpfVecc .item {
            margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVecc .item {
                margin-bottom: 1rem;
            }
        }

        .cid-uRmPpfVecc .item-wrapper {
            position: relative;
            border-radius: 4px;
            display: flex;
            flex-flow: column nowrap;
        }

        .cid-uRmPpfVecc .mbr-section-btn {
            margin-top: auto !important;
        }

        .cid-uRmPpfVecc .mbr-section-title {
            color: #000000;
        }

        .cid-uRmPpfVecc .mbr-text,
        .cid-uRmPpfVecc .mbr-section-btn {
            color: #000000;
            text-align: center;
        }

        .cid-uRmPpfVecc .item-title {
            color: #000000;
        }

        .cid-uRmPpfVecc .content-head {
            max-width: 800px;
        }
    </style>
    <!-- <section class="people03 cid-uRmPpfVecc" id="team-1-uRmPpfVecc">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 content-head">
          <div class="mbr-section-head mb-5">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
              <strong>Our Team</strong>
            </h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1543965170-4c01a586684e%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;IvXjRdn7q7NJFECFmvGv5fzixNV177REMZ1ppuWAVd8">
            </div>
            <div class="item-content align-left">
              <h6 class="item-subtitle mbr-fonts-style display-5">
                <strong>Robert</strong>
              </h6>
              <p class="mbr-text mbr-fonts-style display-7">Head Chef</p>
            </div>
          </div>
        </div>
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1626882048554-d950f9784496%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;dW5fc-iBmGP6yq48Kl8geuipGuDdy212Z4zsTareNhc">
            </div>
            <div class="item-content align-left">
              <h6 class="item-subtitle mbr-fonts-style display-5">
                <strong>Alice</strong>
              </h6>
              <p class="mbr-text mbr-fonts-style display-7">Marketing Lead</p>
            </div>
          </div>
        </div>
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1679746584014-fb31d4eb0a5e%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;JN63jZE83RFg6QJsO10lRCaILM58Sm97JfdRFQ8vjjE">
            </div>
            <div class="item-content align-left">
              <h6 class="item-subtitle mbr-fonts-style display-5">
                <strong>Michael</strong>
              </h6>
              <p class="mbr-text mbr-fonts-style display-7">Delivery Manager</p>
            </div>
          </div>
        </div>
        <div class="item features-image col-12 col-md-6 col-lg-3">
          <div class="item-wrapper">
            <div class="item-img mb-3">
              <img src="https://proxy.electricblaze.com/?u&#x3D;https%3A%2F%2Fimages.unsplash.com%2Fphoto-1692558588242-57cec1e32bba%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26h%3D600%26q%3D80&amp;e&#x3D;1757376000&amp;s&#x3D;xIWQP9nCCpgMLUjS2UgceqJsmy2cEMGbWaGV149Tfgc">
            </div>
            <div class="item-content align-left">
              <h6 class="item-subtitle mbr-fonts-style display-5">
                <strong>Emily</strong>
              </h6>
              <p class="mbr-text mbr-fonts-style display-7">Customer Support</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <style>
        .cid-uRmPpfVT8t {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #ffffff;
        }

        .cid-uRmPpfVT8t .mbr-fallback-image.disabled {
            display: none;
        }

        .cid-uRmPpfVT8t .mbr-fallback-image {
            display: block;
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
        }

        .cid-uRmPpfVT8t .bg-facebook {
            background: #1778f2;
            color: #ffffff;
        }

        .cid-uRmPpfVT8t .bg-facebook:hover {
            background: #0b60cb;
        }

        .cid-uRmPpfVT8t .bg-twitter {
            background: #1da1f2;
            color: #ffffff;
        }

        .cid-uRmPpfVT8t .bg-twitter:hover {
            background: #0c85d0;
        }

        .cid-uRmPpfVT8t .bg-instagram {
            background: #f00075;
            color: #ffffff;
        }

        .cid-uRmPpfVT8t .bg-instagram:hover {
            background: #bd005c;
        }

        .cid-uRmPpfVT8t .bg-tiktok {
            background: #000000;
            color: #ffffff;
        }

        .cid-uRmPpfVT8t .bg-tiktok:hover {
            background: #000000;
        }

        .cid-uRmPpfVT8t .iconfont-wrapper {
            display: inline-block;
            font-size: 32px;
            border-radius: 50%;
            width: 72px;
            height: 72px;
            line-height: 72px;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .cid-uRmPpfVT8t [class^="socicon-"]:before,
        .cid-uRmPpfVT8t [class*=" socicon-"]:before {
            line-height: 55px;
            padding: .6rem;
        }
    </style>
    <section class="social4 cid-uRmPpfVT8t" id="follow-us-1-uRmPpfVT8t">
        <div class="container">
            <div class="media-container-row">
                <div class="col-12">
                    <h3 class="mbr-section-title align-center mb-5 mbr-fonts-style display-2">
                        <strong>Stay Connected</strong>
                    </h3>
                    <div class="social-list align-center">
                        <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="#">
                            <span class="socicon-facebook socicon"></span>
                        </a>
                        <a class="iconfont-wrapper bg-twitter m-2" href="#" target="_blank">
                            <span class="socicon-twitter socicon"></span>
                        </a>
                        <a class="iconfont-wrapper bg-instagram m-2" href="#" target="_blank">
                            <span class="socicon-instagram socicon"></span>
                        </a>
                        <a class="iconfont-wrapper bg-tiktok m-2" href="#" target="_blank">
                            <span class="socicon-tiktok socicon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .cid-uRmPpfVENa {
            padding-top: 6rem;
            padding-bottom: 6rem;
            background-color: transparent;
        }

        .cid-uRmPpfVENa .mbr-overlay {
            background-color: #ffffff;
            opacity: 0.4;
        }

        .cid-uRmPpfVENa form .mbr-section-btn {
            text-align: center;
            width: 100%;
        }

        .cid-uRmPpfVENa form .mbr-section-btn .btn {
            display: inline-flex;
        }

        @media (max-width: 991px) {
            .cid-uRmPpfVENa form .mbr-section-btn .btn {
                width: 100%;
            }
        }

        .cid-uRmPpfVENa .content-head {
            max-width: 800px;
        }
    </style>
    <section class="form5 cid-uRmPpfVENa" id="contact-form-3-uRmPpfVENa">
        <div class="container py-5" style="background-color:black; opacity:0.8; border-radius:20px;">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong style=" color: #fdca00; padding: 10px 20px; border-radius: 8px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3), 0px 4px 12px rgba(0, 0, 0, 0.2);">Get In Touch For Event Orders</strong>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                Oops...! some problem!
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form02-0">
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form02-0">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="url">
                                <input type="url" name="url" placeholder="Phone" data-form-field="url" class="form-control" value="" id="url-form5-0">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="textarea">
                                <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form02-0"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-7">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <style>
        .fs-30 {
            font-size: 30px !important;
        }

        .cid-uRmPpfVBxQ {
            padding-top: 3rem;
            padding-bottom: 3rem;
            background-color: #000000;
        }

        .cid-uRmPpfVBxQ .mbr-fallback-image.disabled {
            display: none;
        }

        .cid-uRmPpfVBxQ .mbr-fallback-image {
            display: block;
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
        }

        .cid-uRmPpfVBxQ .copyright {
            color: #ffffff;
            text-align: left;
        }

        .cid-uRmPpfVBxQ .center {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 991px) {
            .cid-uRmPpfVBxQ .row {
                flex-direction: column-reverse !important;
            }

            .cid-uRmPpfVBxQ .row .copyright {
                margin: 1rem 0 0 0;
            }
        }

        .cid-uRmPpfVBxQ .row-links {
            width: 100%;
            justify-content: center;
        }

        .cid-uRmPpfVBxQ .row-links .row-links-soc {
            list-style: none;
            display: flex;
            justify-content: right;
            flex-wrap: wrap;
            padding: 0;
            margin-bottom: 0;
        }

        @media (max-width: 991px) {
            .cid-uRmPpfVBxQ .row-links .row-links-soc {
                justify-content: center;
            }
        }

        .cid-uRmPpfVBxQ .row-links .row-links-soc li {
            padding: 0 1rem 0rem 1rem;
        }

        @media (max-width: 767px) {
            .cid-uRmPpfVBxQ .row-links .row-links-soc li {
                padding: 0 1rem 1rem 1rem;
            }
        }

        .cid-uRmPpfVBxQ .row-links .row-links-soc li p {
            margin: 0;
        }

        @media (max-width: 991px) {
            .cid-uRmPpfVBxQ .copyright {
                text-align: center;
            }
        }
    </style>
    <script src="{{ asset('assets/mobirise/startm5/parallax/jarallax.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/scrollgallery/scroll-gallery.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/mbr-switch-arrow/mbr-switch-arrow.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/smoothscroll/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/ytplayer/index.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/mobirise/startm5/formoid/formoid.min.js') }}"></script>
    <script src="{{ asset('assets/mobirise/preview.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">
    <script>
        (function() {
            var animationInput = document.createElement('input');
            animationInput.setAttribute('name', 'animation');
            animationInput.setAttribute('type', 'hidden');
            document.body.append(animationInput);
        })();
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Modal Popup Form -->
    <div id="customModal" style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); justify-content:center; align-items:center;">
        <div style="background:#fff; padding:2rem; border-radius:10px; max-width:90vw; width:400px; position:relative;">
            <button id="closeModalBtn" style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:1.5rem; cursor:pointer;">&times;</button>
            <h2 style="margin-bottom:1rem;">Contact Us</h2>
            <form>
                <div style="margin-bottom:1rem;">
                    <label for="modalName">Name:</label>
                    <input type="text" id="modalName" name="name" style="width:100%; padding:0.5rem; margin-top:0.25rem;">
                </div>
                <div style="margin-bottom:1rem;">
                    <label for="modalEmail">Email:</label>
                    <input type="email" id="modalEmail" name="email" style="width:100%; padding:0.5rem; margin-top:0.25rem;">
                </div>
                <div style="margin-bottom:1rem;">
                    <label for="modalMsg">Message:</label>
                    <textarea id="modalMsg" name="message" style="width:100%; padding:0.5rem; margin-top:0.25rem;"></textarea>
                </div>
                <button type="submit" style="background:#FB6107; color:#fff; border:none; padding:0.75rem 1.5rem; border-radius:5px; cursor:pointer;">Send</button>
            </form>
        </div>
    </div>
    <!-- <script>
        (function() {
            let scrollCount = 0;
            let modalShown = false;
            let showTimeout = null;

            function showModal() {
                document.getElementById('customModal').style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function hideModal() {
                document.getElementById('customModal').style.display = 'none';
                document.body.style.overflow = '';
            }
            window.addEventListener('scroll', function() {
                if (modalShown) return;
                scrollCount++;
                if (scrollCount >= 5) {
                    if (!showTimeout) {
                        showTimeout = setTimeout(function() {
                            showModal();
                            modalShown = true;
                        }, 5000); // 10 seconds
                    }
                }
            }, {
                passive: true
            });
            document.getElementById('closeModalBtn').onclick = hideModal;
            document.getElementById('customModal').onclick = function(e) {
                if (e.target === this) hideModal();
            };
        })();
    </script> -->
</body>

</html>
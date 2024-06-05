@extends('layouts.frontend.minor')

@section('title', 'Tentang Kami — Collegetivity')
@section('content')

<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{url('/')}}">
                        <h1 class="font-weight-normal">🎓</h1>
                    </a>
                </div>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="#">|</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{url('fitur')}}">Fitur Aplikasi</a>
                        </li>
                        <li class="active">
                            <a href="{{url('tentang')}}">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{url('kontak')}}">Kontak Kami</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i> Masuk Aplikasi
                        </a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                    <li class="d-none d-xl-block">
                        <a href="#" class="off-canvas-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{('/fitur')}}">Fitur Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/tentang')}}">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{('/kontak')}}">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="{{('/login')}}">Masuk Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/register')}}">Daftar Akun</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->

    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
        <div class="canvas-overlay"></div>
        <div class="canvas-inner">
            <div class="canvas-logo">
                <h1 class="font-weight-normal">🎓</h1>
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">Tentang Kami</h5>
                <p>
                    Collegetivity adalah aplikasi yang membantu dunia perkuliahan mahasiswa mulai dari mengorganisasi
                    pelajaran, tugas dan jadwal serta resources yang membantu para mahasiswa.
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Kontak Kami</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        Malang
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:mufauzan18@gmail.com">mufauzan18@gmail.com</a>
                        <a href="#" target="_blank"></a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+6289531867319">+62 895-3186-7399</a></span>
                    </li>
                </ul>
            </div>
            <a href="#" class="canvas-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
</header>
<!--====== End Header ======-->

<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center mt-5">
            <h1 class="page-title">Tentang Kami</h1>
            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Tentang Kami</li>
            </ul>
        </div>
    </div>
    <div class="page-title-effect d-none d-md-block">
        <img class="particle-1 animate-zoom-fade" src="{{url('landio/assets/img/particle/particle-1.png')}}"
            alt="particle One">
        <img class="particle-2 animate-rotate-me" src="{{url('landio/assets/img/particle/particle-2.png')}}"
            alt="particle Two">
        <img class="particle-3 animate-float-bob-x" src="{{url('landio/assets/img/particle/particle-3.png')}}"
            alt="particle Three">
        <img class="particle-4 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-4.png')}}"
            alt="particle Four">
        <img class="particle-5 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-5.png')}}"
            alt="particle Five">
    </div>
</section>
<!--====== Page title area End ======-->

<!-- ===== About Area Start ===== -->
<section class="about-us-area p-t-130 p-b-130 border-bottom-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-6 col-md-10">
                <div class="preview-image-showcase p-r-70 p-r-lg-40 p-r-md-0 p-b-md-40">
                    <div class="images-left">
                        <div class="image-hover-zoom-overly">
                            <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-1.jpg')}}"
                                alt="About thumbnail one">
                        </div>
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-3.jpg')}}"
                            alt="About thumbnail three">
                    </div>
                    <div class="images-right">
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-2.jpg')}}"
                            alt="About thumbnail two">
                        <img src="{{url('landio/assets/img/preview-gallery/about-thumbnail-4.jpg')}}"
                            alt="About thumbnail four">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="about-us-content">
                    <div class="common-heading tagline-boxed m-b-30">
                        <span class="tagline">🤷🏻‍♀️ • Apa itu Collegetivity?</span>
                        <h2 class="title">Menjadi Solusi Bagi Mahasiswa di Masa Pandemi <span
                                class="font-weight-normal small">⚡</span></h2>
                    </div>
                    <p>
                        Collegetivity dibuat untuk membantu para mahasiswa agar tetap terorganisir, terjadwal dan
                        produktif pada masa pandemi yang membuat kita harus melakukan segalanya secara online
                    </p>
                    <a href="{{url('/register')}}" class="template-btn bordered-btn m-t-40">Bergabung Sekarang <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== About Area End ===== -->

<!-- ===== Service Section Start ===== -->
<section class="service-area p-t-130 p-b-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="common-heading tagline-boxed text-center m-b-30">
                    <span class="tagline">🌟 • Fitur Populer</span>
                    <h2 class="title">Buat Dunia dan Masa Kuliahmu Menjadi Menyenangkan</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center iconic-boxes-v1">
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="iconic-box m-t-30">
                    <div class="icon icon-gradient-3">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <h4 class="title">Atur Jadwalmu</h4>
                    <p>
                        Atur jadwal kuliahmu dengan mudah di Collegetivity
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="iconic-box m-t-30">
                    <div class="icon icon-gradient-4">
                        <i class="far fa-database"></i>
                    </div>
                    <h4 class="title">Kelola Datamu</h4>
                    <p>
                        Kelola semua data akademikmu agar terorganisir di Collegetivity
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="iconic-box m-t-30">
                    <div class="icon icon-gradient-5">
                        <i class="far fa-file-word"></i>
                    </div>
                    <h4 class="title">Simpan Tugasmu</h4>
                    <p>
                        Simpan semua tugasmu tanpa perlu takut hilang di Collegetivity
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="iconic-box m-t-30">
                    <div class="icon icon-gradient-6">
                        <i class="far fa-bookmark"></i>
                    </div>
                    <h4 class="title">Resources Terbaik</h4>
                    <p>
                        Nikmati banyak website dan tools penunjang perkuliahanmu
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== Service Section End ===== -->

<!--====== Start Call To Action ======-->
<section class="cta-section bg-cover-center p-t-90 p-b-90"
    style="background-image: url(./../landio/assets/img/cta/cta-bg-2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="cta-content text-center">
                    <div class="common-heading heading-white m-b-65">
                        <span class="tagline">Tunggu Apa Lagi?</span>
                        <h2 class="title">Segera Daftar dan Bergabung Bersama Collegetivity</h2>
                    </div>

                    <a href="{{url('/register')}}" class="template-btn white-bg bordered-btn">Daftar Sekarang <i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-absolute-image d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
        <img src="{{url('landio/assets/img/cta/cta-absolute-img.png')}}" alt="">
    </div>
</section>

@endsection
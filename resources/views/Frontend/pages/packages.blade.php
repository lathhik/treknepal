@extends('Frontend/master')

@section('content')
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{'custom/Frontend/img/logo.png'}}"
                                                                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                            <li class="nav-item "><a class="nav-link" href="{{'packages'}}">Packages</a></li>
                            <li class="nav-item "><a class="nav-link" href="{{'book'}}">Book a trip</a></li>
                            <li class="nav-item "><a class="nav-link" href="{{'about'}}">about</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{'contact'}}">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="#" class="primary-btn">Book a trip</a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="search nav-link">
                                    <i class="lnr lnr-magnifier" id="search"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content">
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{'packages'}}">Packages</a>
                    </div>
                    <h2>Trip Packages</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Trip Package Area =================-->
    <section class="package-area section_gap_top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="ol-lg-12">
                    <div class="main_title">
                        <p>We’re Offering these Trip Packages</p>
                        <h1>Famous Trips Packages</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-package">
                        <div class="thumb">
                            <img class="img-fluid" src="{{'custom/Frontend/img/package/p1.jpg'}}" alt="">
                        </div>
                        <p class="date"><span>18</span> <br> December</p>
                        <div class="meta-top d-flex">
                            <p><span class="fa fa-location-arrow"></span> Stockholmes</p>
                            <p class="ml-20"><span class="fa fa-calendar"></span> 5 days 6 nights</p>
                        </div>
                        <h4>Desert Riding Turning So <br>
                            much Flowery</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-package">
                        <div class="thumb">
                            <img class="img-fluid" src="{{'custom/Frontend/img/package/p2.jpg'}}" alt="">
                        </div>
                        <p class="date"><span>18</span> <br> December</p>
                        <div class="meta-top d-flex">
                            <p><span class="fa fa-location-arrow"></span> Stockholmes</p>
                            <p class="ml-20"><span class="fa fa-calendar"></span> 5 days 6 nights</p>
                        </div>
                        <h4>Desert Riding Turning So <br>
                            much Flowery</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-package">
                        <div class="thumb">
                            <img class="img-fluid" src="{{'custom/Frontend/img/package/p3.jpg'}}" alt="">
                        </div>
                        <p class="date"><span>18</span> <br> December</p>
                        <div class="meta-top d-flex">
                            <p><span class="fa fa-location-arrow"></span> Stockholmes</p>
                            <p class="ml-20"><span class="fa fa-calendar"></span> 5 days 6 nights</p>
                        </div>
                        <h4>Desert Riding Turning So <br>
                            much Flowery</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Trip Package Area =================-->

    <!--================ Start Popular Places Area =================-->
    <section class="popular-places-area section_gap_bottom">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p>We’re Offering these Trip Packages</p>
                        <h1>Popular Places Around the World</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="popular-places-slider owl-carousel">
            <div class="single-popular-places">
                <div class="popular-places-img">
                    <img src="{{'custom/Frontend/img/places/p1.jpg'}}" alt="">
                </div>
                <div class="popular-places-text">
                    <a href="single-blog.html">
                    </a>
                    <p>Proper Guided Tour</p>
                    <h4>
                        Santorini Island Dream Holiday
                        and Fun package
                    </h4>
                </div>
            </div>
            <div class="single-popular-places">
                <div class="popular-places-img">
                    <img src="{{'custom/Frontend/img/places/p2.jpg'}}" alt="">
                </div>
                <div class="popular-places-text">
                    <a href="single-blog.html">
                    </a>
                    <p>Proper Guided Tour</p>
                    <h4>
                        Santorini Island Dream Holiday
                        and Fun package
                    </h4>
                </div>
            </div>
            <div class="single-popular-places">
                <div class="popular-places-img">
                    <img src="{{'custom/Frontend/img/places/p3.jpg'}}" alt="">
                </div>
                <div class="popular-places-text">
                    <a href="{{''}}">
                        <p>Proper Guided Tour</p>
                    </a>
                    <h4>
                        Santorini Island Dream Holiday
                        and Fun package
                    </h4>
                </div>
            </div>
            <div class="single-popular-places">
                <div class="popular-places-img">
                    <img src="{{'custom/Frontend/img/places/p3.jpg'}}" alt="">
                </div>
                <div class="popular-places-text">
                    <a href="{{''}}">
                    </a>
                    <p>Proper Guided Tour</p>
                    <h4>
                        Santorini Island Dream Holiday
                        and Fun package
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Popular Places Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature-area section_gap_bottom">
        <div class="container">
            <div class="row align-items-end justify-content-left">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p>We’re Offering these Popular Services</p>
                        <h1>Getting Adventure with Services</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="feature-details">
                            <h5>Desert Riding Turning <br>
                                So much Flowery</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor
                                incididunt.
                            </p>
                            <a href="#" class="primary-btn mb-40">Read More</a>
                        </div>
                        <div class="feature-thumb">
                            <img class="img-fluid" src="{{'custom/Frontend/img/service/s1.png'}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- single-feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="feature-details">
                            <h5>Relaxation in the <br>
                                Local Beach Campfire</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor
                                incididunt.
                            </p>
                            <a href="#" class="primary-btn mb-40">Read More</a>
                        </div>
                        <div class="feature-thumb">
                            <img class="img-fluid" src="{{'custom/Frontend/img/service/s3.png'}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- single-feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="feature-details">
                            <h5>Forest Exploration <br>
                                with Energy Package</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor
                                incididunt.
                            </p>
                            <a href="#" class="primary-btn mb-40">Read More</a>
                        </div>
                        <div class="feature-thumb">
                            <img class="img-fluid" src="{{'Frontend'}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ End CTA Area =================-->

@endsection
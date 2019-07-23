@extends('Frontend/master')
@section('content')

    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{'/'}}"><img src="{{asset('custom/Frontend/img/logo.png')}}" alt=""></a>
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
                            <li class="nav-item"><a class="nav-link" href="{{'/'}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{'packages'}}">Packages</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{'book'}}">Book Trip</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{'about'}}">about</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{'contact'}}">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="{{'book'}}" class="primary-btn">Book a trip</a>
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
                        <a href="{{'/'}}">Home</a>
                        <a href="{{'about'}}">About Us</a>
                    </div>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="section_gap about-area">
        <div class="container">
            <div class="single-about row">
                <div class="col-lg-4 col-md-6 no-padding about-left">
                    <div class="about-content">
                        <h1>
                            We Believe <br>
                            that Interior beauty <br>
                            Lasts Long
                        </h1>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                            conduct standards especially in the workplace. That’s why it’s crucial that as women.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 text-center no-padding about-right">
                    <div class="about-thumb">
                        <img src="{{asset('custom/Frontend/img/about-img.jpg')}}" class="img-fluid info-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->

    <!--================ Start CTA Area =================-->
    <div class="cta-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Get Ready for
                        Real time Adventure</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                    </p>
                    <a href="{{'book'}}" class="primary-btn">Book a Trip</a>
                </div>
                <div class="offset-lg-1 col-lg-6">
                    <img class="cta-img img-fluid" src="{{asset('custom/Frontend/img/cta-img.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->

    <!--================Team Area =================-->
    <section class="team_area section_gap_top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p>We’re Offering these Trip Packages</p>
                        <h1>Intelligent Team Members</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row team_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid w-100" src="{{asset('custom/Frontend/img/team/team-1.jpg')}}" alt="">
                            <div class="hover">
                                <h4>Randy Weaver</h4>
                                <p>Senior Barrister at law</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid w-100" src="{{asset('custom/Frontend/img/team/team-2.jpg')}}" alt="">
                            <div class="hover">
                                <h4>Randy Weaver</h4>
                                <p>Senior Barrister at law</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid w-100" src="{{asset('custom/Frontend/img/team/team-3.jpg')}}" alt="">
                            <div class="hover">
                                <h4>Randy Weaver</h4>
                                <p>Senior Barrister at law</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid w-100" src="{{asset('custom/Frontend/img/team/team-4.jpg')}}" alt="">
                            <div class="hover">
                                <h4>Randy Weaver</h4>
                                <p>Senior Barrister at law</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Team Area =================-->

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
                    <img src="{{asset('custom/Frontend/img/places/p1.jpg')}}" alt="">
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
                    <img src="{{asset('custom/Frontend/img/places/p2.jpg')}}" alt="">
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
                    <img src="{{asset('custom/Frontend/img/places/p3.jpg')}}" alt="">
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
                    <img src="{{asset('custom/Frontend/img/places/p4.jpg')}}" alt="">
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
        </div>
    </section>
    <!--================ End Popular Places Area =================-->
-->

@endsection
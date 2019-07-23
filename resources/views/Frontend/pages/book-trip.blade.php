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
                            <li class="nav-item"><a class="nav-link" href="{{'book'}}">Book trip</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{'about'}}">about</a></li>
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
                        <a href="{{'/'}}">Home</a>
                        <a href="{{'book'}}">Book a Trip</a>
                    </div>
                    <h2>Book a Trip</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Book a Trip Area =================-->
    <section class="trip-area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="trip-form-section">
                        <h1>Book a Trip <br>
                            for your next Tour</h1>
                        <form class="trip-form-area trip-page-form trip-form text-right" id="myForm" action="mail.html"
                              method="post">
                            <div class="form-group col-md-12">
                                <div class="form-select">
                                    <select>
                                        <option value="1">Select Packages</option>
                                        <option value="1">Package 01</option>
                                        <option value="1">Package 02</option>
                                        <option value="1">Package 03</option>
                                        <option value="1">Package 04</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="To"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'To'">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="From"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'From'">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Return"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Return'">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Adults"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Adults'">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Child"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Child'">
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="primary-btn text-uppercase">Search Flights</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Book a Trip Area =================-->

@extends('component.layout')
@section('content')

<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


<?php $page ='features';?>

        @include("component.menu")

<div class="search-popup">
<button class="close-search"><span class="far fa-times"></span></button>
<form action="#">
<div class="form-group">
<input type="search" name="search-field" placeholder="Search Here..." required>
<button type="submit"><i class="far fa-search"></i></button>
</div>
</form>
</div>

<main class="main">
    <div class="site-breadcrumb">
        <div class="site-breadcrumb-wrapper" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Our Features</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Our Features</li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img src="assets/img/about/01.jpg" alt>
                        </div>
                        <div class="about-experience">
                            <h1>25 <span>+</span></h1>
                            <span class="about-experience-text">Years Experience</span>
                        </div>
                        <div class="about-shape">
                            <img src="assets/img/about/shape.svg" alt>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            <!-- <span class="site-title-tagline">About Us</span> -->
                                <h2 class="site-title">
                                    We Offer Creative <span>Working Environments</span> That Suit Your Business
                                </h2>
                        </div>
                        <p class="about-text">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour, or
                        randomised words which don't look even.</p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="text">
                                        <p>Take a look at our round up of the best shows</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="text">
                                        <p>It has survived not only five centuries</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="text">
                                        <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- <a href="about.html" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="site-heading mb-3">
                            <!-- <span class="site-title-tagline">About Us</span> -->
                                <h2 class="site-title">
                                  
                                    Our Features in <span>Our Coworking</span> Creative Space
                                </h2>
                        </div>
                        <div class="benefits-content">
                            <!-- <span>Office Features</span> -->
                            <!-- <h3>Benefits to Setting Up Your Sustainable Startup in Our Coworking Creative Space</h3> -->
                            <!-- <h3>Our Features in Our Coworking Creative Space</h3> -->
                            <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p> -->

                            <ul class="benefits-list row">
                                <li class="col-md-6">
                                    <!-- <i class='bx bx-cctv'></i> -->
                                    24-hour Front Desk & Surveillance 

                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bxs-business'></i> -->
                                    Business Lounge
                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bxs-parking'></i> -->
                                    Valet Parking
                                </li>
                                <li class="col-md-6"> 
                                    <!-- <i class='bx bx-swim'></i> -->
                                    Conference Room with ocean views
                                </li>
                                <li class="col-md-6">
                                <!-- <i class="fa fa-glass" aria-hidden="true"></i> -->
                                    5 Star Restaurant on-site

                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bx-coffee'></i> -->
                                    On-site Sandwich / Coffee Bar
                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bxs-city'></i> -->
                                    City/Town center
                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bx-check'></i> -->
                                    Private Terrace

                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bx-heart'></i> -->
                                    Blackjack Tables 
                                </li>
                                <li class="col-md-6">
                                    
                                    <!-- <i class='bx bx-restaurant'></i> -->
                                    Full Chefs Kitchen  
                                </li>
                                <li class="col-md-6">
                                    <!-- <i class="fa fa-check-square" aria-hidden="true"></i> -->
                                    24 -hour access to office 

                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bx-chair'></i> -->
                                    Fully Furnished offices 

                                </li>
                                <li class="col-md-6">
                                    <!-- <i class='bx bx-wifi'></i> -->
                                    High Speed internet 

                                </li>
                                <li class="col-md-6">
                                    
                                    <!-- <i class='bx bx-building-house'></i> -->
                                    2 floors of private offices 


                                </li>
                                
                               
                            </ul>
                        </div>
                        
                        <!-- <a href="about.html" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-left">
                        <div class="about-img">
                            <img src="assets/img/gallery/terrace2.jpg" alt>
                        </div>
                        <!-- <div class="about-experience">
                            <h1>25 <span>+</span></h1>
                            <span class="about-experience-text">Years Experience</span>
                        </div> -->
                        <div class="about-shape">
                            <img src="assets/img/about/shape.svg" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
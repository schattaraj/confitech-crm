@extends('component.layout')
@section('content')
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
      
        
        <?php $page ='home';?>

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
            
                <div class="hero-section hero-slider owl-carousel owl-theme">
                    <div class="hero-single" style="background-image: url(assets/img/slider/Noland4.jpg)">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-lg-7">
                                    <div class="hero-content">
                                        <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">The Best Co Workspace In MIAMI</h6>
                                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                                        Creative Environment For <span>Co Workspace </span> And Office Space For You
                                        </h1>
                                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                                        There are many variations of passages available but the majority have suffered
                                        alteration in some form by injected humour or randomised words.
                                        </p>
                                            <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                                <a href="contact.html" class="theme-btn">Contact Us<i class="far fa-arrow-right"></i></a>
                                                <a href="about.html" class="theme-btn theme-btn2">About Us<i class="far fa-arrow-right"></i></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="hero-single" style="background-image: url(assets/img/slider/slider-2.jpg)">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-7 col-lg-7">
                                    <div class="hero-content">
                                        <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">The Best Co Workspace In USA</h6>
                                        <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                                        Creative Environment For <span>Co Workspace </span> And Office Space For You
                                        </h1>
                                        <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                                        There are many variations of passages available but the majority have suffered
                                        alteration in some form by injected humour or randomised words.
                                        </p>
                                        <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                            <a href="contact.html" class="theme-btn">Contact Us<i class="far fa-arrow-right"></i></a>
                                            <a href="about.html" class="theme-btn theme-btn2">About Us<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            
                </div>
            </div>
            

            <div class="feature-area py-120">
                <div class="container">
                <div class="row">
                <div class="col-md-6 col-lg-3">
                <div class="feature-item">
                <div class="feature-icon">
                <i class="flaticon-room"></i>
                </div>
                <div class="feature-content">
                <h4><a href="#">Creative Space</a></h4>
                <p>There are many variations of the passages available the majority have suffered to
                the alteration in some form injected humour to randomised words.</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3">
                <div class="feature-item">
                <div class="feature-icon">
                <i class="flaticon-wifi"></i>
                </div>
                <div class="feature-content">
                <h4><a href="#">High Speed Wifi</a></h4>
                <p>There are many variations of the passages available the majority have suffered to
                the alteration in some form injected humour to randomised words.</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3">
                <div class="feature-item">
                <div class="feature-icon">
                <i class="flaticon-layers"></i>
                </div>
                <div class="feature-content">
                <h4><a href="#">Customize Space</a></h4>
                <p>There are many variations of the passages available the majority have suffered to
                the alteration in some form injected humour to randomised words.</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-3">
                <div class="feature-item">
                <div class="feature-icon">
                <i class="flaticon-security"></i>
                </div>
                <div class="feature-content">
                <h4><a href="#">24/7 Access</a></h4>
                <p>There are many variations of the passages available the majority have suffered to
                the alteration in some form injected humour to randomised words.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                
                <!-- <div class="about-area pb-120">
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
                <span class="site-title-tagline">About Us</span>
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
                <a href="about.html" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                </div> -->
                
                
                <div class="service-area bg py-120">
                <div class="container">
                <div class="row">
                <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">Services</span>
                <h2 class="site-title">What We <span>Offers</span></h2>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-lg-4">
                <div class="service-item">
                <div class="service-icon">
                <i class="flaticon-university"></i>
                </div>
                <div class="service-content">
                <h4 class="service-title">
                <a href="{{route('private-office')}}">Private Offices</a>
                </h4>
                <p class="service-text">
                There are many variations of passages available but the majority have suffered to
                the alteration in some form by injected.
                </p>
                <div class="service-arrow">
                <a href="{{route('private-office')}}" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="service-item">
                <div class="service-icon">
                <i class="flaticon-work"></i>
                </div>
                <div class="service-content">
                <h4 class="service-title">
                <a href="{{route('private-office')}}">Virtual Office</a>
                </h4>
                <p class="service-text">
                There are many variations of passages available but the majority have suffered to
                the alteration in some form by injected.
                </p>
                <div class="service-arrow">
                <a href="virtual-office.php" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="service-item">
                <div class="service-icon">
                <i class="flaticon-room"></i>
                </div>
                <div class="service-content">
                <h4 class="service-title">
                <a href="#">Conference Room</a>
                </h4>
                <p class="service-text">
                There are many variations of passages available but the majority have suffered to
                the alteration in some form by injected.
                </p>
                <div class="service-arrow">
                <a href="conference-room.php" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="service-item">
                <div class="service-icon">
                <i class="flaticon-location"></i>
                </div>
                <div class="service-content">
                <h4 class="service-title">
                <a href="terrace.php">Terrace</a>
                </h4>
                <p class="service-text">
                There are many variations of passages available but the majority have suffered to
                the alteration in some form by injected.
                </p>
                <div class="service-arrow">
                <a href="terrace.php" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="service-item">
                <div class="service-icon">
                <i class="flaticon-layers"></i>
                </div>
                <div class="service-content">
                <h4 class="service-title">
                <a href="#">Coworking Space</a>
                </h4>
                <p class="service-text">
                There are many variations of passages available but the majority have suffered to
                the alteration in some form by injected.
                </p>
                <div class="service-arrow">
                <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="service-item">
                <div class="service-icon">
                <i class="flaticon-calendar"></i>
                </div>
                <div class="service-content">
                <h4 class="service-title">
                <a href="#">Online Booking</a>
                </h4>
                <p class="service-text">
                There are many variations of passages available but the majority have suffered to
                the alteration in some form by injected.
                </p>
                <div class="service-arrow">
                <a href="#" class="service-read-btn">Learn More<i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                
                <div class="workspace py-120">
                <div class="container">
                <div class="row">
                <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">Workspace</span>
                <h2 class="site-title">Our Modern <span>Office Spaces</span></h2>
                </div>
                </div>
                </div>
                <div class="workspace-slider owl-carousel owl-theme">
                <div class="workspace-item">
                <div class="workspace-img">
                <img src="assets/img/workspace/Noland 1.jpg" alt>
                </div>
                <div class="workspace-content">
                <h4><a href="#">Office Spaces</a></h4>
                <p>There are many variations of passages available but the majority suffered.</p>
                </div>
                </div>
                <div class="workspace-item">
                <div class="workspace-img">
                <img src="assets/img/workspace/Noland 2.jpg" alt>
                </div>
                <div class="workspace-content">
                <h4><a href="#">Co Working</a></h4>
                <p>There are many variations of passages available but the majority suffered.</p>
                </div>
                </div>
                <div class="workspace-item">
                <div class="workspace-img">
                <img src="assets/img/workspace/Noland 3.jpg" alt>
                </div>
                <div class="workspace-content">
                <h4><a href="#">Meeting Room</a></h4>
                <p>There are many variations of passages available but the majority suffered.</p>
                </div>
                </div>
                <div class="workspace-item">
                <div class="workspace-img">
                <img src="assets/img/workspace/Noland 4.jpg" alt>
                </div>
                <div class="workspace-content">
                <h4><a href="#">Conference Room</a></h4>
                <p>There are many variations of passages available but the majority suffered.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                
                <div class="counter-area">
                <div class="container">
                <div class="row">
                <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                <div class="icon"><i class="flaticon-university"></i></div>
                <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                <h6 class="title">+ Happy Clients</h6>
                </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                <div class="icon"><i class="flaticon-work"></i></div>
                <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                <h6 class="title">+ Our Staff</h6>
                </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                <div class="icon"><i class="flaticon-layers"></i></div>
                <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                <h6 class="title">+ Available Spaces</h6>
                </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                <div class="icon"><i class="flaticon-award"></i></div>
                <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                <h6 class="title">+ Win Awards</h6>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                
                <div class="gallery-area py-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="site-heading text-center mb-4">
                                    <span class="site-title-tagline">Gallery</span>
                                    <h2 class="site-title">Our Photo <span>Gallery</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="filter-controls">
                            <ul class="filter-btns">
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".cat1">Private Office</li>
                                <li data-filter=".cat2">Virtual Office</li>
                                <li data-filter=".cat3">Conference Room </li>
                                <li data-filter=".cat4">Terrace</li>
                            <!-- <li data-filter=".cat5">Private Office</li> -->
                            </ul>
                        </div>
                    <div class="row filter-box popup-gallery">
                        <div class="col-md-6 col-lg-4 filter-item cat1 cat2">
                            <div class="gallery-item">
                            <div class="gallery-img">
                            <img class="img-fluid" src="assets/img/gallery/Advisor4-d.jpg" alt>
                            </div>
                            <div class="gallery-content">
                            <a class="popup-img gallery-link" href="assets/img/gallery/Advisor4-d.jpg"> <i class="far fa-plus"></i></a>
                            <div class="gallery-content-info">
                            <h4><a href="#">Office Spaces</a></h4>
                            <small>Workspace</small>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 filter-item cat2 cat3">
                            <div class="gallery-item">
                            <div class="gallery-img">
                            <img class="img-fluid" src="assets/img/gallery/Advisor3-e.jpg" alt>
                            </div>
                            <div class="gallery-content">
                            <a class="popup-img gallery-link" href="assets/img/gallery/Advisor3-e.jpg"> <i class="far fa-plus"></i></a>
                            <div class="gallery-content-info">
                            <h4><a href="#">Office Spaces</a></h4>
                            <small>Workspace</small>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 filter-item  cat4">
                            <div class="gallery-item">
                            <div class="gallery-img">
                            <img class="img-fluid" src="assets/img/gallery/terrace1.jpg" alt>
                            </div>
                            <div class="gallery-content">
                            <a class="popup-img gallery-link" href="assets/img/gallery/terrace1.jpg"> <i class="far fa-plus"></i></a>
                            <div class="gallery-content-info">
                            <h4><a href="#">Office Spaces</a></h4>
                            <small>Workspace</small>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 filter-item cat1 cat3">
                            <div class="gallery-item">
                            <div class="gallery-img">
                            <img class="img-fluid" src="assets/img/gallery/Noland4.jpg" alt>
                            </div>
                            <div class="gallery-content">
                            <a class="popup-img gallery-link" href="assets/img/gallery/Noland4.jpg"> <i class="far fa-plus"></i></a>
                            <div class="gallery-content-info">
                            <h4><a href="#">Office Spaces</a></h4>
                            <small>Workspace</small>
                            </div>
                            </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4 filter-item cat4 ">
                            <div class="gallery-item">
                            <div class="gallery-img">
                            <img class="img-fluid" src="assets/img/gallery/terrace2.jpg" alt>
                            </div>
                            <div class="gallery-content">
                            <a class="popup-img gallery-link" href="assets/img/gallery/terrace2.jpg"> <i class="far fa-plus"></i></a>
                            <div class="gallery-content-info">
                            <h4><a href="#">Office Spaces</a></h4>
                            <small>Workspace</small>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-lg-4 filter-item cat4">
                            <div class="gallery-item">
                            <div class="gallery-img">
                            <img class="img-fluid" src="assets/img/gallery/terrace3.jpg" alt>
                            </div>
                            <div class="gallery-content">
                            <a class="popup-img gallery-link" href="assets/img/gallery/terrace3.jpg"> <i class="far fa-plus"></i></a>
                            <div class="gallery-content-info">
                            <h4><a href="#">Office Spaces</a></h4>
                            <small>Workspace</small>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                
                <!-- <div class="video-area pb-120">
                    <div class="container">
                        <div class="video-content" style="background-image: url(assets/img/video/video.jpg);">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="video-wrapper">
                                        <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                        <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
                <div class="cta-area py-120 mb-4">
                    <div class="container">
                    <div class="row">
                    <div class="col-md-7 mx-auto">
                    <div class="cta-content">
                    <h1>Everyone Is Welcome To Our Cospace</h1>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    <a href="#" class="theme-btn">Schedule a tour <i class="far fa-arrow-right"></i></a>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
                
                <div class="pricing-area pb-120">
                <div class="container">
                <div class="row">
                <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">Pricing</span>
                <h2 class="site-title">Our Pricing <span>Plan</span></h2>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-lg-4">
                <div class="pricing-item">
                <div class="pricing-header-wrapper">
                <div class="pricing-header">
                <h5>Starter</h5>
                <p>subscription</p>
                </div>
                <div class="pricing-amount">
                <strong>$59</strong>
                <div class="pricing-amount-type">
                <span>Per Month</span>
                </div>
                </div>
                </div>
                <div class="pricing-feature">
                <ul>
                <li><i class="far fa-check"></i>24/7 Access</li>
                <li><i class="far fa-check"></i>High Speed Internet</li>
                <li><i class="far fa-check"></i>Huge Parking Space</li>
                <li><i class="far fa-check"></i>Conference Room</li>
                <li><i class="far fa-check"></i>Utilities Included</li>
                </ul>
                </div>
                <div class="pricing-footer">
                <a href="#" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="pricing-item">
                <div class="pricing-header-wrapper">
                <div class="pricing-header">
                <h5>Business</h5>
                <p>subscription</p>
                </div>
                <div class="pricing-amount">
                <strong>$99</strong>
                <div class="pricing-amount-type">
                <span>Per Month</span>
                </div>
                </div>
                </div>
                <div class="pricing-feature">
                <ul>
                <li><i class="far fa-check"></i>24/7 Access</li>
                <li><i class="far fa-check"></i>High Speed Internet</li>
                <li><i class="far fa-check"></i>Huge Parking Space</li>
                <li><i class="far fa-check"></i>Conference Room</li>
                <li><i class="far fa-check"></i>Utilities Included</li>
                </ul>
                </div>
                <div class="pricing-footer">
                <a href="#" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4">
                <div class="pricing-item">
                <div class="pricing-header-wrapper">
                <div class="pricing-header">
                <h5>Advance</h5>
                <p>subscription</p>
                </div>
                <div class="pricing-amount">
                <strong>$159</strong>
                <div class="pricing-amount-type">
                <span>Per Month</span>
                </div>
                </div>
                </div>
                <div class="pricing-feature">
                <ul>
                <li><i class="far fa-check"></i>24/7 Access</li>
                <li><i class="far fa-check"></i>High Speed Internet</li>
                <li><i class="far fa-check"></i>Huge Parking Space</li>
                <li><i class="far fa-check"></i>Conference Room</li>
                <li><i class="far fa-check"></i>Utilities Included</li>
                </ul>
                </div>
                <div class="pricing-footer">
                <a href="#" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                
                <div class="choose-area pt-50 pb-50">
                <div class="choose-img"></div>
                <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6 choose-right">
                <div class="choose-right-content">
                <div class="site-heading mb-3">
                <span class="site-title-tagline">Why Choose Us</span>
                <h2 class="site-title my-3 text-white">We Build The <span>Dream With</span> Passion For You</h2>
                </div>
                <p class="about-text">There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected humour.</p>
                <div class="row">
                <div class="col-md-6">
                <ul>
                <li>
                <i class="flaticon-parking"></i>
                <div>
                <h5>Parking Area</h5>
                <p>
                It is a long established fact that a reader distracted.
                </p>
                </div>
                </li>
                <li>
                <i class="flaticon-breakfast"></i>
                <div>
                <h5>Restaurants</h5>
                <p>
                It is a long established fact that a reader distracted.
                </p>
                </div>
                </li>
                <li>
                <i class="flaticon-shop"></i>
                <div>
                <h5>Super Market</h5>
                <p>
                It is a long established fact that a reader distracted.
                </p>
                </div>
                </li>
                </ul>
                </div>
                <div class="col-md-6">
                <ul>
                <li>
                <i class="flaticon-wifi"></i>
                <div>
                <h5>High Speed Wifi</h5>
                <p>
                It is a long established fact that a reader distracted.
                </p>
                </div>
                </li>
                <li>
                <i class="flaticon-layers"></i>
                <div>
                <h5>Customize Space</h5>
                <p>
                It is a long established fact that a reader distracted.
                </p>
                </div>
                </li>
                <li>
                <i class="flaticon-security"></i>
                <div>
                <h5>24/7 Access</h5>
                <p>
                It is a long established fact that a reader distracted.
                </p>
                </div>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                
                
                <!-- <div class="team-area py-120">
                    <div class="container">
                    <div class="row">
                    <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                    <span class="site-title-tagline">Team</span>
                    <h2 class="site-title">Meet <span>Experts</span></h2>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="team-item">
                    <img src="assets/img/team/01.jpg" alt="thumb">
                    <div class="team-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="team-content">
                <div class="team-bio">
                <h5><a href="#">Malissa Fierro</a></h5>
                <span>Manager</span>
                </div>
                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-item">
                <img src="assets/img/team/02.jpg" alt="thumb">
                <div class="team-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="team-content">
                <div class="team-bio">
                <h5><a href="#">Arron Rodri</a></h5>
                <span>Manager</span>
                </div>
                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-item active">
                <img src="assets/img/team/03.jpg" alt="thumb">
                <div class="team-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="team-content">
                <div class="team-bio">
                <h5><a href="#">Chad Smith</a></h5>
                <span>Manager</span>
                </div>
                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-item">
                <img src="assets/img/team/04.jpg" alt="thumb">
                <div class="team-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="team-content">
                <div class="team-bio">
                <h5><a href="#">Tony Pinto</a></h5>
                <span>Manager</span>
                </div>
                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div> -->
                
                
                <div class="testimonial-area bg py-120">
                <div class="container">
                <div class="row">
                <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                <span class="site-title-tagline">Testimonials</span>
                <h2 class="site-title">What Client <span>Say's</span></h2>
                </div>
                </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-item">
                <div class="testimonial-author-img">
                <img src="assets/img/testimonial/01.jpg" alt>
                </div>
                <div class="testimonial-rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p>
                There are many variations of passages available but the majority have suffered
                alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                <h4>Sylvia H Green</h4>
                <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
                </div>
                <div class="testimonial-item">
                <div class="testimonial-author-img">
                <img src="assets/img/testimonial/02.jpg" alt>
                </div>
                <div class="testimonial-rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p>
                There are many variations of passages available but the majority have suffered
                alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                <h4>William Knox</h4>
                <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
                </div>
                <div class="testimonial-item">
                <div class="testimonial-author-img">
                <img src="assets/img/testimonial/03.jpg" alt>
                </div>
                <div class="testimonial-rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p>
                There are many variations of passages available but the majority have suffered
                alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                <h4>Eva C. Najar</h4>
                <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
                </div>
                <div class="testimonial-item">
                <div class="testimonial-author-img">
                <img src="assets/img/testimonial/04.jpg" alt>
                </div>
                <div class="testimonial-rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p>
                There are many variations of passages available but the majority have suffered
                alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                <h4>Lisa Allen</h4>
                <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
                </div>
                </div>
                </div>
                </div>
                
                
                <!-- <div class="blog-area pt-120">
                    <div class="container">
                    <div class="row">
                    <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                    <span class="site-title-tagline">Our Blog</span>
                    <h2 class="site-title">News & <span> Blog</span></h2>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                    <div class="blog-item-img">
                    <img src="assets/img/blog/01.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                    <div class="blog-item-meta">
                    <ul>
                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                    <li><a href="#"><i class="far fa-calendar-alt"></i> April 11, 2022</a></li>
                    </ul>
                    </div>
                    <h4 class="blog-title">
                    <a href="#">There are many variates of passages alteration</a>
                    </h4>
                    <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                    <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                    <div class="blog-item-img">
                    <img src="assets/img/blog/02.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                    <div class="blog-item-meta">
                    <ul>
                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                    <li><a href="#"><i class="far fa-calendar-alt"></i> April 11, 2022</a></li>
                    </ul>
                    </div>
                    <h4 class="blog-title">
                    <a href="#">There are many variates of passages alteration</a>
                    </h4>
                    <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                    <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                    <div class="blog-item-img">
                    <img src="assets/img/blog/03.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                    <div class="blog-item-meta">
                    <ul>
                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                    <li><a href="#"><i class="far fa-calendar-alt"></i> April 11, 2022</a></li>
                    </ul>
                    </div>
                    <h4 class="blog-title">
                    <a href="#">There are many variates of passages alteration</a>
                    </h4>
                    <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                    <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </div> -->
                
                
                <!-- <div class="partner-area pt-70 pb-70">
                <div class="container">
                <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                <img src="assets/img/partner/01.jpg" alt="thumb">
                <img src="assets/img/partner/02.jpg" alt="thumb">
                <img src="assets/img/partner/03.jpg" alt="thumb">
                <img src="assets/img/partner/04.jpg" alt="thumb">
                <img src="assets/img/partner/01.jpg" alt="thumb">
                <img src="assets/img/partner/02.jpg" alt="thumb">
                <img src="assets/img/partner/03.jpg" alt="thumb">
                </div>
                </div>
                </div> -->
                
                </main>

@endsection
@extends('component.layout')
@section('content')

        <!-- Start Preloader Area -->
<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


<?php $page ='mfc-events';?>

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
<h2 class="breadcrumb-title">MFC Events</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
<li class="active">MFC Events</li>
</ul>
</div>
</div>
</div>   

        <!-- End Membership Area -->
        <div class="coworking-space-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <!-- <span>Our Spaces</span> -->
                    <!-- <h2>MFC Events </h2> -->
                </div>

                <div class="row justify-content-center">
                <h3>Upcoming events</h3>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-coworking-space">
                           
                            <div class="image">
                                <img src="assets/img/gallery/Advisor4-d.jpg" alt="image">
<!-- 
                                <div class="number">01</div>
                                <div class="hover-number">01</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Left Brain Wealth Management Annual Conference </h3>
                        <p>Join us for the wealth management annual conference here at the Miami financial center. This conference will be hosted by Noland Langford and Freddy Garcia financial advisors have been in the industry for over 25+ years. </p>
                        <a class="theme-mini-btn" href="">RSVP</a>
                        <!-- <a class="event-btn" href="schedule-tour.php">Schedule a Tour</a> -->
                    </div>
                    <h3>Upcoming events</h3>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-coworking-space">
                           
                            <div class="image">
                                <img src="assets/img/gallery/Advisor3-e.jpg" alt="image">
<!-- 
                                <div class="number">01</div>
                                <div class="hover-number">01</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Miami Financial Center Grand Opening </h3>
                        <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2. </p>
                        <a class="theme-mini-btn" href="">See Photos</a>
                        <!-- <a class="event-btn" href="schedule-tour.php">Schedule a Tour</a> -->
                    </div>

                    



 
                </div>
            </div>
        </div>
        <!-- Start Footer Area -->
        @endsection
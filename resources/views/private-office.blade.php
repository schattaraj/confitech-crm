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
        <?php $page ='private-office';?>

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
<h2 class="breadcrumb-title">Private Offices</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
<li class="active">Private Offices</li>
</ul>
</div>
</div>
</div>


    <div class="coworking-space-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-coworking-space">
                            <div class="image">
                                <img src="assets/img/gallery/Advisor4-d.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Suite 507</h3>
                        <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2-3. </p>
                       
                            <a class="theme-btn mt-4" href="contact.php">Inquire Now</a>
                            <a class="theme-btn mt-4" href="schedule-tour.php">Schedule a Tour</a>
                        
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-coworking-space">
                            <div class="image">
                                <img src="assets/img/gallery/Advisor3-e.jpg" alt="image">
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Suite 503</h3>
                        <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2. </p>
                        <a class="theme-btn mt-4" href="contact.php">Inquire Now</a>
                        <a class="theme-btn mt-4" href="schedule-tour.php">Schedule a Tour</a>
                    </div>

                    



 
                </div>
            </div>
        </div>


</main>
@endsection
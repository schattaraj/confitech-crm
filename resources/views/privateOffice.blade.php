@extends('component.layout')
@section('content')
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

      
        
        <?php $page ='home';?>

        @include("component.menu")
        
        <main class="main">
            <div class="site-breadcrumb">
            <div class="site-breadcrumb-wrapper" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
            <h2 class="breadcrumb-title">WORKSPACE</h2>
            <ul class="breadcrumb-menu">
            <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
            <li class="active">WORKSPACE</li>
            </ul>
            </div>
            </div>
            </div>
            
        

        <!-- End Membership Area -->
        <div class="coworking-space-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Our Spaces</span>
                    <h2>Private Offices </h2>
                </div>

                <input type="radio" id="room1" name="room" hidden>
                <label for="room1" class="mb-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-coworking-space">
                            <div class="image">
                                <img src="assets/images/solution/Advisor4-d.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Suite 507</h3>
                        <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2-3. </p>
                        <a class="event-btn" href="">Inquire Now</a>
                        <a class="event-btn" href="schedule-tour.php">Schedule a Tour</a>
                    </div>
                </div>
            </label>
        
            <input type="radio" id="room2" name="room" hidden>
            <label for="room2">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="single-coworking-space">
                        <div class="image">
                            <img src="assets/images/solution/Advisor3-e.jpg" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h3>Suite 503</h3>
                    <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2. 
</p>
                    <a class="event-btn" href="">Inquire Now</a>
                    <a class="event-btn" href="schedule-tour.php">Schedule a Tour</a>
                </div>
            </div>
            </label>
            </div>
        </div>
    </main>
@endsection
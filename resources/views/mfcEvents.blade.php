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

        <!-- Start Top Header Area -->
        <div class="header-information">Header Information</div>
        
        <?php $page ='home';?>

        @include("component.menu")
        
        <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>MFC Events</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li>MFC Events</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        

        <!-- End Membership Area -->
        <div class="coworking-space-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <!-- <span>Our Spaces</span> -->
                    <h2>MFC Events </h2>
                </div>

                <div class="row justify-content-center">
                <h3>Upcoming events</h3>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-coworking-space">
                           
                            <div class="image">
                                <img src="assets/images/solution/Advisor4-d.jpg" alt="image">
<!-- 
                                <div class="number">01</div>
                                <div class="hover-number">01</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Left Brain Wealth Management Annual Conference </h3>
                        <p>Join us for the wealth management annual conference here at the Miami financial center. This conference will be hosted by Noland Langford and Freddy Garcia financial advisors have been in the industry for over 25+ years. </p>
                        <a class="event-btn" href="">RSVP</a>
                        <!-- <a class="event-btn" href="schedule-tour.php">Schedule a Tour</a> -->
                    </div>
                    <h3>Upcoming events</h3>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-coworking-space">
                           
                            <div class="image">
                                <img src="assets/images/solution/Advisor3-e.jpg" alt="image">
<!-- 
                                <div class="number">01</div>
                                <div class="hover-number">01</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Miami Financial Center Grand Opening </h3>
                        <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2. 
</p>
                        <a class="event-btn" href="">See Photos</a>
                        <!-- <a class="event-btn" href="schedule-tour.php">Schedule a Tour</a> -->
                    </div>

                    



 
                </div>
            </div>
        </div>
@endsection
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
                    <h2>Inquire Now</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.php">Home</a></li>
                        <li>Inquire Now</li>
                    </ul>
                </div>
            </div>
        </div>
         <!-- Start Services Details Area -->
         <div class="events-booking-area pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    

                    <div class="col-lg-7 col-md-12">
                        <div class="events-booking-form enquire-form">
                            <div class="events-booking-title">
                                <!-- <span>Booking Table</span> -->
                                <h3>Inquire Now</h3>
                            </div>

                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name*">
                                </div>
        
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email*">
                                </div>
        
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputCompanyName" class="form-label">Interested in:</label><br>
                                    <input class="form-check-input" type="checkbox" id="virtual" name="fav_language" value="Virtual">
                                    <label class="form-check-label" for="virtual">Virtual Office</label>
                                    
                                    <input class="form-check-input" type="checkbox" id="meetingRoom" name="fav_language" value="MeetingRoom">
                                    <label class="form-check-label" for="meetingRoom">Meeting Room</label>
                                    <input class="form-check-input" type="checkbox" id="terrace" name="fav_language" value="Terrace">
                                    <label class="form-check-label" for="terrace">Terrace</label>
                                </div>
 
                                <button type="submit" class="default-btn">Submit Now <i class="bx bx-send"></i> <span></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                  
                    <img src="assets/images/terrace2.jpg" alt="image">
                    <img src="assets/images/terrace2.jpg" alt="image">
                    </div>

                </div>
            </div>
        </div>
@endsection
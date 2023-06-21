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
                    <h2>Conference Room</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Conference Room</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        
        <!-- Start Membership Area -->
        <section class="services-details-area ptb-100">
            <div class="container">
               
                <div class="services-details-overview">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-image">
                                <img src="assets/images/croom.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-desc benefits-content">
                                <h3 class="mt-0">Conference room features</h3>
                                <ul class="benefits-list">
                                    <li><i class="bx bx-check"></i>Premiere conference room in prominent easy to get to location. Enjoy beautiful views of the Biscayne Bay during conference. </li>
                                    <li><i class="bx bx-check"></i>Conference Room holds up to 10 people </li>
                                    <li><i class="bx bx-check"></i>Apple TV</li>
                                    <li><i class="bx bx-check"></i>Video Conferencing</li>
                                    <li><i class="bx bx-check"></i>$60 an hour 3 hour minimum</li>
                                </ul>
                                

                                
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </section>
        <!-- End Membership Area -->

  @endsection
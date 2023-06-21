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
                    <h2>Virtual Office</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Virtual Office</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        
        <!-- Start Membership Area -->
        <div class="membership-area-without-image pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Membership Options</span>
                    <h2> Miami Financial Centre is just the right place for your all office requirements</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-membership-table">
                            <div class="membership-header">
                                <h3>Package 1(Business Address) </h3>
                            </div>

                            <!-- <div class="price">$129 - $153 <span></span></div> -->
                            <div class="price">$129 - $153 <span></span></div>


                            <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                            <ul class="membership-features-list">
                                <li><i class="bx bx-check"></i> $120- Professional address, mail & package handling</li>
                                <li><i class="bx bx-check"></i> $ 2 day pass to office lounge</li>
                                <li><i class="bx bx-check"></i> Professional address in premier location </li>
                                <li><i class="bx bx-check"></i> Have mail forward to your business address </li>
                                <li><i class="bx bx-check"></i> Us on your website and all documents </li>
                             
                            </ul>

                            <div class="membership-btn">
                                <a href="agreementLength.php" class="default-btn">Book Office <i class="bx bxs-chevron-right"></i><span></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-membership-table">
                            <div class="membership-header">
                                <h3>Package 2( Virtual office)</h3>
                            </div>

                            <div class="price">$259</div>

                            <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                            <ul class="membership-features-list">
                                <li><i class="bx bx-check"></i> Professional address in premier location </li>
                                <li><i class="bx bx-check"></i> Have mail forward to your business address </li>
                                <li><i class="bx bx-check"></i> Us on your website and all documents </li>
                                <li><i class="bx bx-check"></i> Local Number </li>
                                <li><i class="bx bx-check"></i> Mail forwarding  </li>
                                <li><i class="bx bx-check"></i> 3-day lounge and terrace access </li>
                                <!-- <li class="color-gray"><i class="bx bx-check"></i> Access to Community's Online Member Network</li> -->
                            </ul>

                            <div class="membership-btn">
                                <a href="agreementLength.php" class="default-btn">Book Office <i class="bx bxs-chevron-right"></i><span></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-membership-table">
                            <div class="membership-header">
                                <h3>Package 3</h3>
                            </div>

                            <div class="price">$365 <span></span></div>

                            <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                            <ul class="membership-features-list">
                                <li><i class="bx bx-check"></i> Professional address in premier location </li>
                                <li><i class="bx bx-check"></i> Have mail forward to your business address </li>
                                <li><i class="bx bx-check"></i> Us on your website and all documents </li>
                                <li><i class="bx bx-check"></i> Local Number </li>
                                <li><i class="bx bx-check"></i> Mail forwarding  </li>
                                <li><i class="bx bx-check"></i> 3-day lounge and terrace access </li>
                                <li><i class="bx bx-check"></i> 5-day lounge and terrace access </li>
                            </ul>

                            <div class="membership-btn">
                                <a href="agreementLength.php" class="default-btn">Book Office <i class="bx bxs-chevron-right"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Membership Area -->

@endsection
@extends('component.layout')
@section('content')

<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


<?php $page ='virtual-office';?>

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
<h2 class="breadcrumb-title">Virtual Office</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Virtual Office</li>
</ul>
</div>
</div>
</div>

    <div class="pricing-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-header-wrapper">
                            <div class="pricing-header">
                                <h5>Package 1</h5>
                                <p>subscription</p>
                            </div>
                            <div class="pricing-amount">
                                <strong>$129 - $153</strong>
                                <div class="pricing-amount-type">
                                    <!-- <span>Per Month</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="pricing-feature">
                            <ul>
                                <li><i class="far fa-check"></i>$120- Professional address, mail & package handling</li>
                                <li><i class="far fa-check"></i>$ 2 day pass to office lounge</li>
                                <li><i class="far fa-check"></i>Professional address in premier location</li>
                                <li><i class="far fa-check"></i>Have mail forward to your business address</li>
                                <li><i class="far fa-check"></i>Us on your website and all documents</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="agreement-length.php" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-header-wrapper">
                            <div class="pricing-header">
                                <h5>Package 2</h5>
                                <p>subscription</p>
                            </div>
                            <div class="pricing-amount">
                                <strong>$259</strong>
                                <div class="pricing-amount-type">
                                <!-- <span>Per Month</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="pricing-feature">
                            <ul>
                            <li><i class="far fa-check"></i>Professional address in premier location</li>
                            <li><i class="far fa-check"></i>Have mail forward to your business address</li>
                            <li><i class="far fa-check"></i>Us on your website and all documents</li>
                            <li><i class="far fa-check"></i>Local Number</li>
                            <li><i class="far fa-check"></i>Mail forwarding</li>
                            <li><i class="far fa-check"></i>3-day lounge and terrace access</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="agreement-length.php" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-header-wrapper">
                            <div class="pricing-header">
                                <h5>Package 3</h5>
                                <p>subscription</p>
                            </div>
                            <div class="pricing-amount">
                                <strong>$365</strong>
                                <div class="pricing-amount-type">
                                <!-- <span>Per Month</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="pricing-feature">
                            <ul>
                                <li><i class="far fa-check"></i>Professional address in premier location</li>
                                <li><i class="far fa-check"></i>Have mail forward to your business address</li>
                                <li><i class="far fa-check"></i>Us on your website and all documents</li>
                                <li><i class="far fa-check"></i>Local Number</li>
                                <li><i class="far fa-check"></i>Mail forwarding</li>
                                <li><i class="far fa-check"></i>3-day lounge and terrace access</li>
                                <li><i class="far fa-check"></i>5-day lounge and terrace access</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="agreement-length.php" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>




@endsection
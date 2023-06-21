@extends('component.layout')
@section('content')

<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


<?php $page ='directory';?>

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
<h2 class="breadcrumb-title">Directory</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
<li class="active">Directory</li>
</ul>
</div>
</div>
</div>


    <div class="coworking-space-area pt-100 pb-70">
    <div class="container">
                <div class="services-details-overview">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="services-details-image">
                               <a href="https://leftbrainwm.com/"  target="_blank"> <img src="assets/img/gallery/lbwm.jpg" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="services-details-desc">
                            <a href="https://leftbrainwm.com/"  target="_blank"><h3>Left Brain Wealth Management  </h3></a>
                                <p>
                                    Left Brain is dedicated to providing investment management and strategic wealth planning. Simply put, we strive to be our client’s trusted advisor. As an Investment advisory firm, our primary focus is to provide unbiased opinions that are designed to achieve long term investment results. 
                                </p>
                                <p>CEO- Noland Langford, MBA,CFP</p>
                                <p> URL - <a href="https://leftbrainwm.com/"  target="_blank">leftbrainwm.com</a> </p>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="services-details-overview">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="services-details-image">
                                <!-- <img src="assets/images/google.png" alt="image"> -->
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <!-- <div class="services-details-desc">
                                <h3>Google</h3>
                                <p>CEO- China Thompson 
                                    </p>

  
                            </div> -->
                        </div>
                    </div>
                </div>   
            </div>
    </div>

</main>

@endsection
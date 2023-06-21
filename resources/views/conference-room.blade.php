@extends('component.layout')
@section('content')

<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


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
<h2 class="breadcrumb-title">Conference Room</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Conference Room</li>
</ul>
</div>
</div>
</div>

    <div class="services-details-area ptb-100 py-120">
            <div class="container">
               
                <div class="services-details-overview">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-image">
                                <img src="assets/img/gallery/croom.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="services-details-desc benefits-content">
                                <h3 class="mt-0">Conference Room features</h3>
                                <ul class="benefits-list">
                                    <li><i class="far fa-check"></i> Premiere conference room in prominent easy to get to location. Enjoy beautiful views of the Biscayne Bay during conference. </li>
                                    <li><i class="far fa-check"></i> Conference Room holds up to 10 people </li>
                                    <li><i class="far fa-check"></i> Apple TV</li>
                                    <li><i class="far fa-check"></i> Video Conferencing</li>
                                    <li><i class="far fa-check"></i> $60 an hour 3 hour minimum</li>
                                </ul>
                                

                                
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
</div>



</main>




@endsection
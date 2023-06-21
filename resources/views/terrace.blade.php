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
<h2 class="breadcrumb-title">Terrace</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Terrace</li>
</ul>
</div>
</div>
</div>

    <div class="services-details-area ptb-100 py-120">
    <div class="container">
               
               <div class="services-details-overview">
                   <div class="row ">
                       <div class="col-lg-8 col-md-12">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="services-details-image">
                                       <img src="assets/img/gallery/terrace1.jpg" alt="image">
                                   </div>
                               </div>
                               <div class="col-md-6 pe-md-0">
                                   <div class="services-details-image">
                                       <img src="assets/img/gallery/terrace2.jpg" alt="image">
                                   </div>
                               </div>
                               
                               <div class="col-md-6 ps-md-0">
                                   <div class="services-details-image">
                                       <img src="assets/img/gallery/terrace3.jpg" alt="image">
                                   </div>
                               </div>

                           </div>
                       </div>

                       <div class="col-lg-4 col-md-12">

                           <div class="row">
                               <div class="col-md-12">
                                   <div class="services-details-desc benefits-content">
                                       <h3 class="mt-0">Terrace</h3>
                                       <p>Host your next event at the beautiful outdoor terrace here at the Miami Financial Center. Our terrace is 4,000 sq.ft
                                           and had a capacity of 150 people.  The space includes lounge seating, stage with lighting, blackjack tables,
                                           surround sound, presentation capabilities and a Full chef’s kitchen.</p>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="events-booking-form mt-4">
                                       <div class="events-booking-title ">
                                           
                                           <h3>Inquire Now </h3>
                                       </div>

                                       <form>
                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Full name *">
                                           </div>
                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Phone Number">
                                           </div>
                   
                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Your Email*">
                                           </div>

                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="event Type">
                                           </div>

                                           <div class="form-group">
                                               <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" placeholder="Your Preferred Date*">
                                       
                                               
                                           </div>

                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Message">
                                           </div>

                                           <button type="submit" class="theme-btn ">Submit Now <i class="far fa-paper-plane"></i> <span></span></button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                       
                   <div class="row ">
                       
                       
                       
                   </div>
               </div>   
           </div>  
    </div>



</main>




@endsection
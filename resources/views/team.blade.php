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
      
        
        <?php $page ='team';?>

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
<h2 class="breadcrumb-title">Our Team</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Our Team</li>
</ul>
</div>
</div>
</div>


<div class="team-area py-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="team-item">
<img src="assets/img/team/Noland.jpg" alt="thumb">
<div class="team-social">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
</div>
<div class="team-content">
<div class="team-bio">
<h5><a href="#">Noland Langford</a></h5>
<span>PRESIDENT & CEO</span>
</div>
<a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="team-item">
<img src="assets/img/team/china2.jpg" alt="thumb">
<div class="team-social">
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
<a href="#"><i class="fab fa-youtube"></i></a>
</div>
<div class="team-content">
<div class="team-bio">
<h5><a href="#">DelChina Thompson</a></h5>
<span>Director & Project Manager</span>
</div>
<a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>

</main>

@endsection
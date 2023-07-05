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
        
        <?php $page ='';?>

        @include("component.menu")

 
<main class="main">
<div class="site-breadcrumb">
<div class="site-breadcrumb-wrapper" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Schedule a Tour</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Schedule a Tour</li>
</ul>
</div>
</div>
</div>
<div class="container my-5">
    <div class="schedule-tour thank-you">
    <h3>Thank you for Reaching out!</h3>
    </div>
</div>
</main>
@endsection
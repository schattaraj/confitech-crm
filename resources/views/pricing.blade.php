@extends('component.layout')
@section('content')
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
<h2 class="breadcrumb-title">Pricing Plan</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Pricing Plan</li>
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
<h5>Starter</h5>
<p>subscription</p>
</div>
<div class="pricing-amount">
<strong>$59</strong>
<div class="pricing-amount-type">
<span>Per Month</span>
</div>
</div>
</div>
<div class="pricing-feature">
<ul>
<li><i class="far fa-check"></i>24/7 Access</li>
<li><i class="far fa-check"></i>High Speed Internet</li>
<li><i class="far fa-check"></i>Huge Parking Space</li>
<li><i class="far fa-check"></i>Conference Room</li>
<li><i class="far fa-check"></i>Utilities Included</li>
</ul>
</div>
<div class="pricing-footer">
<a href="#" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="pricing-item">
<div class="pricing-header-wrapper">
<div class="pricing-header">
<h5>Business</h5>
<p>subscription</p>
</div>
<div class="pricing-amount">
<strong>$99</strong>
<div class="pricing-amount-type">
<span>Per Month</span>
</div>
</div>
</div>
<div class="pricing-feature">
<ul>
<li><i class="far fa-check"></i>24/7 Access</li>
<li><i class="far fa-check"></i>High Speed Internet</li>
<li><i class="far fa-check"></i>Huge Parking Space</li>
<li><i class="far fa-check"></i>Conference Room</li>
<li><i class="far fa-check"></i>Utilities Included</li>
</ul>
</div>
<div class="pricing-footer">
<a href="#" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="pricing-item">
<div class="pricing-header-wrapper">
<div class="pricing-header">
<h5>Advance</h5>
<p>subscription</p>
</div>
<div class="pricing-amount">
<strong>$159</strong>
<div class="pricing-amount-type">
<span>Per Month</span>
</div>
</div>
</div>
<div class="pricing-feature">
<ul>
<li><i class="far fa-check"></i>24/7 Access</li>
<li><i class="far fa-check"></i>High Speed Internet</li>
<li><i class="far fa-check"></i>Huge Parking Space</li>
<li><i class="far fa-check"></i>Conference Room</li>
<li><i class="far fa-check"></i>Utilities Included</li>
</ul>
</div>
<div class="pricing-footer">
<a href="#" class="theme-btn">Book Now <i class="far fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</main>

@endsection
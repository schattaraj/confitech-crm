@extends('component.layout')
@section('content')

<div class="preloader">
<div class="loader">
<div class="loader-box-1"></div>
<div class="loader-box-2"></div>
</div>
</div>


<?php $page ='contact';?>

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
<h2 class="breadcrumb-title">Contact Us</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Contact Us</li>
</ul>
</div>
</div>
</div>


<div class="contact-area py-120">
<div class="container">
<div class="contact-wrapper">
<div class="row">
<div class="col-md-4">
<div class="contact-content">
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-map-marker-alt"></i>
</div>
<div class="contact-info-content">
<h5>Office Address</h5>
<p>1300 Brickell Bay Drive, Suite 500 Miami, FL 33131</p>
</div>
</div>
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-phone"></i>
</div>
<div class="contact-info-content">
<h5>Call Us</h5>
<p><a href="tel:+21236547898"><i class="far fa-phone"></i>+00 234 567 890</a></p>
</div>
</div>
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-envelope"></i>
</div>
<div class="contact-info-content">
<h5>Email Us</h5>
<p>
    <!-- <a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8de4e3ebe2cde8f5ece0fde1e8a3eee2e0">[email&#160;protected]</a> -->
    <a href="mailto:info@mfc.com"><span class="__cf_email__">info@mfc.com</span></a>
</p>
</div>
</div>
<div class="contact-info">
<div class="contact-info-icon">
<i class="fal fa-clock"></i>
</div>
<div class="contact-info-content">
<h5>Office Open</h5>
<p>Sun - Fri (08AM - 10PM)</p>
</div>
</div>
</div>
</div>
<div class="col-md-8 align-self-center">
<div class="contact-form">
<div class="contact-form-header">
<h2>Get In Touch</h2>
<p>It is a long established fact that a reader will be distracted by the readable
content of a page when looking at its layout. </p>
</div>
<form method="post" action="https://live.themewild.com/cospace/assets/php/contact.php" id="contact-form">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Your Name" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Your Email" required>
</div>
</div>
</div>
<div class="form-group">
<input type="text" class="form-control" name="subject" placeholder="Your Subject" required>
</div>
<div class="form-group">
<textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
</div>
<button type="submit" class="theme-btn">Send
Message <i class="far fa-paper-plane"></i></button>
<div class="col-md-12 mt-3">
<div class="form-messege text-success"></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.3084959435887!2d-80.19238568497909!3d25.760371983637324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b681a8497489%3A0x4ce526054b2bfff0!2s1300%20Brickell%20Bay%20Dr%20Suite%20500%2C%20Miami%2C%20FL%2033131%2C%20USA!5e0!3m2!1sen!2sin!4v1686721217164!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</main>

@endsection
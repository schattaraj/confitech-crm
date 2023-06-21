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
        
        <?php $page ='';?>

        @include("component.menu")

 
<main class="main">
 <!-- Start Page Banner -->
 <div class="site-breadcrumb">

  <div class="site-breadcrumb-wrapper" style="background: url(assets/img/breadcrumb/01.jpg)">
  
  <div class="container">
  
  <h2 class="breadcrumb-title">Checkout</h2>
  
  <ul class="breadcrumb-menu">
  
  <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
  
  <li class="active">Checkout</li>
  
  </ul>
  
  </div>
  
  </div>
  
  </div>
<!-- End Page Banner -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="#">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First name*</label>
                    <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last name*</label>
                    <input type="lastName" class="form-control" id="lastName">
                </div>
                {{-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</main>
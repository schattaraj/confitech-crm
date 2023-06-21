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

      
        
       
        
<div class="search-popup">
<button class="close-search"><span class="far fa-times"></span></button>
<form action="#">
<div class="form-group">
<input type="search" name="search-field" placeholder="Search Here..." required>
<button type="submit"><i class="far fa-search"></i></button>
</div>
</form>
</div>

<?php $page ='home';?>

@include("component.menu")

<main class="main">

<div class="site-breadcrumb">
<div class="site-breadcrumb-wrapper" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Login</h2>
<ul class="breadcrumb-menu">
<li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
<li class="active">Login</li>
</ul>
</div>
</div>
</div>


<div class="login-area py-120">
<div class="container">
<div class="col-md-5 mx-auto">
<div class="login-form">
<div class="login-header">
<h3>Login</h3>
<p>login with your cospace account</p>
</div>
<form action="{{route('loginSubmit')}}" method="post">
    @csrf
    @if(Session('error'))
     <div class="alert alert-danger" role="alert">
      {{Session('error')}}
    </div>                          
    @endif

<div class="form-group">
<label>Email Address</label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<div class="form-group">
<label>Password</label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<div class="d-flex justify-content-between mb-4">
<div class="form-check">
<input class="form-check-input" type="checkbox" value id="remember">
<label class="form-check-label" for="remember">
Remember Me
</label>
</div>
<a href="forgot-password.html" class="forgot-pass">Forgot Password?</a>
</div>
<div class="d-flex align-items-center">
<button type="submit" class="theme-btn">Login <i class="far fa-sign-in"></i></button>
</div>
</form>
<div class="login-footer">
<p>Don't have an account? <a href="register.html">Register.</a></p>
</div>
</div>
</div>
</div>
</div>
</main>

@endsection
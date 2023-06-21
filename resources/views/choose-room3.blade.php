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
  
  <h2 class="breadcrumb-title">Schedule a Tour</h2>
  
  <ul class="breadcrumb-menu">
  
  <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
  
  <li class="active">Schedule a Tour</li>
  
  </ul>
  
  </div>
  
  </div>
  
  </div>
<!-- End Page Banner -->
<div class="container my-5">
    <div class="schedule-tour">
    <ul class="flex">
        <li><a href="#" class="active">Start Booking</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="{{route('choose-room')}}">Choose a room</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="#">Checkout</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
    </ul>
    <form class="row gy-2 gx-3" action="">        
        <div class="col-auto">
          <label for="autoSizingSelect">Space type required</label>
          <select>
            <option data-display="Select">Meeting Room</option>
            <option value="1">Meeting Room 1</option>
            <option value="2">Meeting Room 2</option>
            <option value="3" disabled>Meeting Room 3</option>
            <option value="4">Meeting Room 4</option>
          </select>
        </div>
        <div class="col-auto">
            <label for="date">Date</label>
            <select>
              <option data-display="Select">Tomorrow</option>
              <option value="13-06-2023">13-06-2023</option>
              <option value="13-06-2023">14-06-2023</option>
              <option value="13-06-2023">15-06-2023</option>
              <option value="13-06-2023">16-06-2023</option>
            </select>
          </div>
          <div class="col-auto">
            <label for="date">Time from</label>
            <select>
              <option data-display="Select">09:00</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="12:00">12:00</option>
              <option value="01:00">01:00</option>
              <option value="02:00">02:00</option>
              <option value="03:00">03:00</option>
              <option value="04:00">04:00</option>
              <option value="05:00">05:00</option>
              <option value="06:00">06:00</option>
              <option value="07:00">07:00</option>
              <option value="08:00">08:00</option>
            </select>
          </div>
          <div class="col-auto">
            <label for="date">Time until</label>
            <select>
              <option data-display="Select">09:00</option>
              <option value="10:00">10:00</option>
              <option value="10:00">11:00</option>
              <option value="10:00">12:00</option>
              <option value="10:00">01:00</option>
              <option value="10:00">02:00</option>
              <option value="10:00">03:00</option>
              <option value="10:00">04:00</option>
              <option value="10:00">05:00</option>
              <option value="10:00">06:00</option>
              <option value="10:00">07:00</option>
              <option value="10:00">08:00</option>
            </select>
          </div>
          <div class="col-auto">
              <label for="">No of people</label>
              <input type="text" class="form-control">
          </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
      </form>
</div>
    {{-- <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" placeholder="Your Preferred Date*">
            </div>
        </div>
    </div> --}}
</div>
</main>
@endsection
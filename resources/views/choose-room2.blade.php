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

        <!-- Start Top Header Area -->
        <div class="header-information">Header Information</div>
        
        <?php $page ='home';?>

        @include("component.menu")
 <!-- Start Page Banner -->
 <div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Schedule a tour</h2>
            
            <ul class="pages-list">
                <li><a href="index.php">Home</a></li>
                <li>Schedule a tour</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->
<div class="container my-5">
    <div class="schedule-tour">
    <ul class="flex">
        <li><a href="#">Start Booking</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="{{route('choose-room')}}" class="active">Choose a room</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="#">Checkout</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
    </ul>
    <form class="row mt-4 gy-2 gx-3 align-items-center" action="">  
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
            <div class="single-coworking-space">
                <div class="image">
                    <img src="assets/images/solution/Advisor4-d.jpg" alt="image">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Suite 507</h3>
            <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2-3. </p>
           
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single-coworking-space">
                <div class="image">
                    <img src="assets/images/solution/Advisor3-e.jpg" alt="image">
<!-- 
                    <div class="number">01</div>
                    <div class="hover-number">01</div> -->
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <h3>Suite 503</h3>
            <p>This office is on the 5th floor and has amazing view of Brickell Bay Dr. and the port of Miami. The office fully furnished and equipped with top of the finishes. This space is perfect for an individual or a team of 2. 
</p>
            
        </div>

        




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
@endsection
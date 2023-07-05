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
    <div class="schedule-tour">

    <ul class="flex f-band">
        <li><a href="{{route('schedule-tour')}}" id="selectRoom-tab" onclick="openEvent(event, 'selectRoom')" class="tablinks active">Start Booking</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li class="active"><a href="javascript:;" onclick="showtabcontent()">Choose a room</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="#" class="disable">Checkout</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
    </ul>
    <div class="contact-form">
    <form class="row gy-2 gx-3 mt-4  align-items-center"  action="{{route('schedule-check')}}" method="post">        
      @csrf
      <div class="row mb-5">
          <div class="col-md-6 col-lg-4">
            <input type="radio" id="month1" value="30" name="month" hidden>
            <label for="month1">
            <div class="agreement-length">
              <div class="agreement-header-wrapper">
                <div class="agreement-header">
                    <h5>Monthly Agreement</h5>
                </div>
                <div class="pricing-amount">
                  <strong> $153</strong>
                </div>
              </div>
            </div>
          </label>
          </div>
          <div class="col-md-6 col-lg-4">
            <input type="radio" id="month2" value="180" name="month" hidden>
            <label for="month2">
            <div class="agreement-length">
              <div class="agreement-header-wrapper">
                <div class="agreement-header">
                    <h5>6 Months Agreement</h5>
                </div>
                <div class="pricing-amount">
                
                  <strong> $183</strong>
                </div>
              </div>
            </div>
            </label>
          </div>
          <div class="col-md-6 col-lg-4">
            <input type="radio" id="month3" value="360" name="month" hidden>
            <label for="month3">
            <div class="agreement-length">
              <div class="agreement-header-wrapper">
                <div class="agreement-header">
                    <h5>Yearly Agreement</h5>
                </div>
                <div class="pricing-amount">
                  <strong> $253</strong>
                </div>
              </div>
            </div>
            </label>
          </div>
          @error('month')
          <div class="invalid-feedback d-block mt-5" style="position: relative;z-index:9">{{$message}}</div>
          @enderror
        </div>
         
        <div class="row">
          <div class="col-md-6">
          <div class="form-group mb-4">
          <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{$allData->name}}" required>
          @error('name')
          <div class="invalid-feedback d-block">{{$message}}</div>
          @enderror
          </div>
          </div>
          <div class="col-md-6">
          <div class="form-group mb-4">
          <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{$allData->email}}" required>
          @error('email')
          <div class="invalid-feedback d-block">{{$message}}</div>
          @enderror
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$allData->phone}}" required>
          @error('phone')
          <div class="invalid-feedback d-block">{{$message}}</div>
          @enderror
          </div>
          </div>
        
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="form-group  mb-4">
            <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message">{{$allData->message}}</textarea>
            @error('message')
          <div class="invalid-feedback d-block">{{$message}}</div>
          @enderror
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <button type="submit" class="theme-btn">Search</button>
          </div>
          <div class="col-md-8">
          <div class="form-messege text-success"></div>
          </div>
        </div>
      </form>
      
</div>
</div>
<div class="MainContent">
                    <div id="selectRoom" class="tabcontent">
                      <?php $count = 1; ?>
                        @foreach ($rooms as $room)
                        <div class="row room">
                            <div class="col-lg-9 col-md-12">
                                <h3 class="them-color">Select Rooms</h3>
                                <img src="assets/img/workspace/Noland 1.jpg" alt="image">
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="eventText">
                                    <p class="them-color">Availabe for $ 
                                      @if($allData->month == "30")
                                      153
                                    @endif
                                    @if($allData->month == "180")
                                      183
                                    @endif
                                    @if($allData->month == "360")
                                    253
                                  @endif
                                  </p>
                                    <a id="checkout-tab" onclick="openEvent(event, 'checkout{{$count}}',{{$room->room_id}})" class="theme-mini-btn tablinks">Book online</a>
                                </div>
                            </div>
                        </div>      
                        <?php $count++; ?>
                        @endforeach
                      
                        {{-- <div class="row room">
                            <div class="col-lg-9 col-md-12">
                                <h3 class="them-color">Select Rooms</h3>
                                <img src="assets/img/workspace/Noland 2.jpg" alt="image">
                              
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="eventText">
                                <p class="them-color">Sorry Unavailable for selected date and time</p>
                                    <!-- <button class="theme-mini-btn">Book online</button> -->
                                  
                                </div>
                            </div>
                        </div>    --}}
                    </div>
                    <?php $count = 1; ?>
                    @if(count($rooms) == 0)
                    <h3>No Room Availabe</h3>
                    @endif
                        @foreach ($rooms as $room)
                    <div id="checkout{{$count}}" class="tabcontent" style="display: none;">
                      <form action="{{route('book-add')}}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="name" value="{{$allData->name}}" hidden>
                        <input type="text" class="form-control" name="email" value="{{$allData->email}}" hidden>
                        <input type="text" class="form-control" name="phone" value="{{$allData->phone}}" hidden>
                        <input type="text" class="form-control" name="room_id" value="{{$room->room_id}}" hidden>
                        <input type="text" class="form-control" name="starting_date" value="{{$startingdate}}" hidden>
                        <input type="text" class="form-control" name="end_date" value="{{$endDate}}" hidden>
                        <input type="text" class="form-control" name="message" value="{{$allData->message}}" hidden>
                        <div class="row room">
                            <div class="col-lg-9 col-md-12">
                                <h3 class="them-color">Checkout</h3>
                                <img src="assets/img/workspace/Noland 1.jpg" alt="image">
                               
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="eventText">
                                    <p class="them-color">Meeting Room</p>
                                    <p class="them-color"><b>{{$startingdate}} -> {{$endDate}}</b></p>
                                    <p class="them-color">$75 includes taxes</p>
                                  <button class="theme-mini-btn tablinks" type="submit">Submit</button>
                                </div>
                            </div>
                        </div> 
                      </form>
                    </div>
                   <?php $count++; ?>
                        @endforeach
                            
                </div>


</main>
@endsection
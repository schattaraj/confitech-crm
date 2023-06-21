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
        <li class="active"><a href="{{route('schedule-tour')}}"id="selectRoom-tab" onclick="openEvent(event, 'selectRoom')" class="tablinks active">Start Booking</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="#" class="disable">Choose a room</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="#"  class="disable">Checkout</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
    </ul>

    <form class="row gy-2 gx-3 mt-4  align-items-center" action="{{route('schedule-check')}}" method="post">        
      @csrf
        <div class="col-md-2">
          <label for="autoSizingSelect" class="them-color">Space type required</label>
          <select class="form-control" name="meeting_room">
            <option @if(old('meeting_room') == "1") selected @endif value="1">Meeting Room 1</option>
            <option @if(old('meeting_room') == "2") selected @endif value="2">Meeting Room 2</option>
            <option @if(old('meeting_room') == "3") selected @endif value="3">Meeting Room 3</option>
            <option @if(old('meeting_room') == "4") selected @endif value="4">Meeting Room 4</option>
          </select>
        </div>
        <div class="col-md-2">
            <label for="date" class="them-color">Date</label>
            <input type="date" id="date" class="form-control" name="date" value="{{old('date')}}" min="2023-06-20" required>
            <!-- <select class="form-control">
              <option data-display="Select">Tomorrow</option>
              <option value="13-06-2023">13-06-2023</option>
              <option value="13-06-2023">14-06-2023</option>
              <option value="13-06-2023">15-06-2023</option>
              <option value="13-06-2023">16-06-2023</option>
            </select> -->
          </div>
          <div class="col-md-2">
            <label for="time_from" class="them-color">Time from</label>
            <select class="form-control" name="time_from">
              <option @if(old('time_from') == "09:00") selected @endif value="09:00">09:00</option>
              <option @if(old('time_from') == "10:00") selected @endif value="10:00">10:00</option>
              <option @if(old('time_from') == "11:00") selected @endif value="11:00">11:00</option>
              <option @if(old('time_from') == "12:00") selected @endif value="12:00">12:00</option>
              <option @if(old('time_from') == "13:00") selected @endif value="13:00">13:00</option>
              <option @if(old('time_from') == "14:00") selected @endif value="14:00">14:00</option>
              <option @if(old('time_from') == "15:00") selected @endif value="15:00">15:00</option>
              <option @if(old('time_from') == "16:00") selected @endif value="16:00">16:00</option>
              <option @if(old('time_from') == "17:00") selected @endif value="17:00">17:00</option>
              <option @if(old('time_from') == "18:00") selected @endif value="18:00">18:00</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="time_until" class="them-color">Time until</label>
            <select class="form-control" name="time_until">
              <option @if(old('time_until') == "09:00") selected @endif value="09:00">09:00</option>
              <option @if(old('time_until') == "10:00") selected @else selected @endif value="10:00">10:00</option>
              <option @if(old('time_until') == "11:00") selected @endif value="11:00">11:00</option>
              <option @if(old('time_until') == "12:00") selected @endif value="12:00">12:00</option>
              <option @if(old('time_until') == "13:00") selected @endif value="13:00">13:00</option>
              <option @if(old('time_until') == "14:00") selected @endif value="14:00">14:00</option>
              <option @if(old('time_until') == "15:00") selected @endif value="15:00">15:00</option>
              <option @if(old('time_until') == "16:00") selected @endif value="16:00">16:00</option>
              <option @if(old('time_until') == "17:00") selected @endif value="17:00">17:00</option>
              <option @if(old('time_until') == "18:00") selected @endif value="18:00">18:00</option>
            </select>
            @error('time_until')
                        <div class="invalid-feedback d-block">{{$message}}</div>
                        @enderror
          </div>
          <div class="col-md-2">
              <label for="noOfPeople" class="them-color">No of people</label>
              <input type="text" class="form-control" name="noOfPeople" value="{{old('noOfPeople')}}">
              @error('noOfPeople')
                        <div class="invalid-feedback d-block">{{$message}}</div>
              @enderror
          </div>
          <!-- <div class="col-auto">
            <label for="">Location</label>
            <input type="text" class="form-control" placeholder="Enter a city">
        </div> -->
        <div class="col-md-2 text-center">
          {{-- <a id="selectRoom-tab" onclick="openEvent(event, 'selectRoom')" class="theme-mini-btn tablinks w-100">Search</a> --}}
          <button class="theme-mini-btn tablinks w-100" type="submit">Search</button>
        </div>
        @if (session()->get('error'))
        <div class="alert alert-warning">
            {{ session()->get('error') }}
        </div>
    @endif
      </form>
      
</div>
{{-- <div class="MainContent">
                    <div id="selectRoom" class="tabcontent">
                        <div class="row room">
                            <div class="col-lg-9 col-md-12">
                                <h3 class="them-color">Select Rooms</h3>
                                <img src="assets/img/workspace/Noland 1.jpg" alt="image">
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="eventText">
                                    <p class="them-color">Availabe for $ 75</p>
                                    <a id="checkout-tab" onclick="openEvent(event, 'checkout')" class="theme-mini-btn tablinks">Book online</a>
                                </div>
                            </div>
                        </div> 
                        <div class="row room">
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
                        </div>   
                    </div>
                    <div id="checkout" class="tabcontent">
                        <div class="row room">
                            <div class="col-lg-9 col-md-12">
                                <h3 class="them-color">Checkout</h3>
                                <img src="assets/img/workspace/Noland 1.jpg" alt="image">
                               
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="eventText">
                                    <p class="them-color">Meeting Room</p>
                                    <p class="them-color"><b>15-06-2023   09:00am -> 10:00am</b></p>
                                    <p class="them-color">$75 includes taxes</p>

                                  <button class="theme-mini-btn tablinks">Submit</button>
                                </div>
                            </div>
                        </div> 
                          
                    </div>
                    
                            
                </div> --}}


</main>
@endsection
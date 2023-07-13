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
<h2 class="breadcrumb-title">Book Conference Room</h2>
<ul class="breadcrumb-menu">
<li><a href="{{route('home')}}"><i class="far fa-home"></i> Home</a></li>
<li class="active">Book Conference Room</li>
</ul>
</div>
</div>
</div>
<div class="container my-5">
    <div class="schedule-tour">

        <!-- <ul class="flex f-band">
            <li class="active"><a href="{{route('book-conference')}}"id="selectRoom-tab" onclick="openEvent(event, 'selectRoom')" class="tablinks active">Start Booking</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
            <li><a href="#" class="disable">Choose a room</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
            <li><a href="#"  class="disable">Checkout</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        </ul> -->
        <form class="row gy-2 gx-3 mt-4  align-items-center" action="{{route('book-conference')}}" method="post">        
          <div class="contact-form cr-form">
            
              @csrf
                <div class="row">
                  <div class="col-lg-9 col-md-12">
                    {{-- <div class="row">
                      <div class="col-md-4">
                        <div class="form-group mb-4">
                          <label for="date" class="them-color">Date</label>
                          <input type="date" id="date" class="form-control" name="date" value="{{old('date')}}" min="2023-06-20" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group mb-4">
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
                      </div>
                      <div class="col-md-4">
                        <div class="form-group mb-4">
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
                      </div>
                    </div> --}}
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group mb-4">
                          <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{old('name')}}" required>
                            @error('name')
                              <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group mb-4">
                          <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{old('email')}}" required>
                          @error('email')
                          <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                          
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{old('phone')}}" required>
                          @error('phone')
                          <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                          
                        </div>
                      </div>
                        <div class="col-md-12">
                          <div class="form-group  mb-4">
                            <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message">{{old('message')}}</textarea>
                            @error('message')
                          <div class="invalid-feedback d-block">{{$message}}</div>
                          @enderror
                          </div>
                        </div>                      
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <div class="add-On">
                      <h5>Add Ons</h5>
                      <div class="form-group  mt-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="add_ons[]" value="add_on1" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Lunch $22 per serving (salad & sandwiches)
                        </label>
                      </div>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="add_ons[]" value="add_on2" id="flexCheckChecked" >
                        <label class="form-check-label" for="flexCheckChecked">
                          Breakfast $12 per serving (pastries & fruit)
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="add_ons[]" value="add_on3" id="flexCheckChecked2" >
                        <label class="form-check-label" for="flexCheckChecked2">
                          Coffee, water, tea $5 per person
                        </label>
                      </div>
                      @error('add_ons')
                        <div class="invalid-feedback d-block">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 mb-4">
                    <input type="text" id="date" name="date" value="{{old('date')}}" hidden>
                    <input type="text" id="time_from" value="{{old('time_from')}}" name="time_from" hidden>
                    <input type="text" id="time_until" value="{{old('time_until')}}" name="time_until" hidden>
                    @error('date')
                    <div class="invalid-feedback d-block" style="position: relative">{{$message}}</div>
                    @enderror
                    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif      
    <div class="alert alert-danger d-none" id="error">You have to book minimum 3 hours</div>
                    <div id="mousePointer" class="">Drag to Select a range of time</div>
                    <div id="timeError" class="alert-danger">Please select time after <span id="time"></span><button onclick="hideTimeError()" type="button">x</button></div>
                    <ul class="indications">
                      <li><span class="disabled"></span> Disabled</li>
                      <li><span class="current"></span> Today</li>
                      <li><span class="selected"></span> Selected</li>
                      <li><span class="booked"></span> Booked</li>
                    </ul>
                    <div id='calendar' title="This answer is useful."></div>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="theme-btn">Search</button>
                  </div>
                  <div class="col-md-8">
                    <div class="form-messege text-success"></div>
                  </div>
                </div>
              
          </div> 
        </div>
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

                <?php
                $arr = array(); 
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
$time = date('h:i:s');
                foreach($conference_bookings as $conference_booking){
                //   $dateCreate=date_create($conference_booking->date);
                //  $dateSub = date_sub($dateCreate,date_interval_create_from_date_string("1 day"));
                   
                array_push($arr,array(
                'title'=>$conference_booking->name,
                'start'=>$conference_booking->date.'T'.$conference_booking->time_from.':00',
                'end'=>$conference_booking->date.'T'.$conference_booking->time_until.':00',
                'backgroundColor'=>'green',
                'borderColor'=>'green'
                ));
                }
                
                ?>    
</main>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
    //   let arr = [{
    //   start: '2023-07-10',
    //   end: '2023-07-18',
    //   display: 'background'
    // }];
      // console.log(new Date(Date.parse(arr[0].end)).getFullYear());
      let bg = 'background';
  let arr = <?php echo json_encode($arr); ?>;
      var calendar = new FullCalendar.Calendar(calendarEl, {
        // initialView: 'dayGridMonth',
        initialView: 'timeGridWeek',
        selectable: true,
        editable: true,
        disableDragging: true,
        allDay:false,
        // timeZone: 'local',
      
  events: arr,
validRange: {
    // start: '2023-07-10T08:00:00',
    start: '<?php echo $date."T".$time ?>',
    end: ''
  },
  // [
  //   {
  //     title: 'Admin',
  //     start: '2023-07-13T07:00:00',
  //     backgroundColor: 'green',
  //     borderColor: 'green'
  //   },
  //   {
  //     title: 'Subrata',
  //     start: '2023-07-02T08:00:00',
  //     end: '2023-07-02T09:00:00',
  //     backgroundColor: 'green',
  //     borderColor: 'green'
  //   }
  // ],
  select: function(selectionInfo ) {
           console.log(selectionInfo);
           let startDate = new Date(selectionInfo.startStr);
           let currentDate = new Date();
           let currentHour = currentDate.getHours();
           let currentMinute = currentDate.getMinutes();
           console.log("startDate : "+startDate);
           console.log("currentDate : "+currentDate);
          
           let startHour = startDate.getHours();
           let startMinute = startDate.getMinutes();
           let endDate = new Date(selectionInfo.endStr);
           let endHour = endDate.getHours();
           let endtMinute = endDate.getMinutes();
           let year = startDate.getFullYear();
           let month = startDate.getMonth()+1;
           let day = startDate.getDate();
          //  if(endtMinute !== 0){
          //    endtMinute = endtMinute-30;
          //  }
           if(month.toString().length < 2){
             month = "0"+month;
           }
           if(day.toString().length < 2){
             day = "0"+day;
           }
           if(startHour == 0){
            startHour = 24; 
           }
           else{
            if(startHour.toString().length < 2){
            startHour = "0"+startHour;
           }
           }          
           if(startMinute.toString().length < 2){
            startMinute = "0"+startMinute;
           }
           if(endHour == 0){
             endHour = 24;
           }
           else{
            if(endHour.toString().length < 2){
            endHour = "0"+endHour;
           }
           }           
           if(endtMinute.toString().length < 2){
            endtMinute = "0"+endtMinute;
           }
           console.log(startHour);
           let fullDate = year+"-"+month+"-"+day;
           let time_from = startHour+":"+startMinute;
           let time_until = endHour+":"+endtMinute;
           document.getElementById('date').setAttribute('value',fullDate);
           document.getElementById('time_from').setAttribute('value',time_from);
           document.getElementById('time_until').setAttribute('value',time_until);
    // console.log("hour " + (parseInt(endHour) - parseInt(startHour)));
    if(startDate < currentDate){
            document.getElementById("timeError").classList.add("show");
            document.getElementById("time").innerText=currentHour+":"+currentMinute;
            document.querySelector("form .theme-btn").classList.add('disabled');
            document.querySelector("#error").classList.remove('d-none');
    }
    else{
      if(parseInt(startHour) == 24){
        startHour = 0;
      }
      if(parseInt(endHour) == 24){
        endHour = 0;
      }
      if(parseInt(endHour) - parseInt(startHour) > 2){
      document.querySelector("form .theme-btn").classList.remove('disabled');
      document.querySelector("#error").classList.add('d-none');
    }
    else{
      document.querySelector("form .theme-btn").classList.add('disabled');
      document.querySelector("#error").classList.remove('d-none');
    }
    console.log("start" +startHour);
    console.log("end" +endHour);
    console.log(parseInt(endHour) - parseInt(startHour));
    }
			},
      });
      calendar.render();
//   var calendar = new Calendar(calendarEl, {
//   timeZone: 'local', // the default (unnecessary to specify)
//   events: [
//     { start: '2018-09-01T12:30:00Z' }, // will be shifted to local
//     { start: '2018-09-01T12:30:00+XX:XX' }, // already same offset as local, so won't shift
//     { start: '2018-09-01T12:30:00' } // will be parsed as if it were '2018-09-01T12:30:00+XX:XX'
//   ],
//   dateClick: function(arg) {
//     console.log(arg.date.toString()); // use *local* methods on the native Date Object
//     // will output something like 'Sat Sep 01 2018 00:00:00 GMT-XX:XX (Eastern Daylight Time)'
//   }
// });
    });
    document.querySelector("#calendar").addEventListener("mouseover",function(e){
document.getElementById("mousePointer").classList.add("show");
document.getElementById("mousePointer").style.top=(e.screenY - 100)+"px";
document.getElementById("mousePointer").style.left=e.screenX+"px";
    });
    function hideTimeError(){
      document.getElementById("timeError").classList.remove("show");
}
    document.querySelector("#calendar").addEventListener("mouseleave",function(e){
      document.getElementById("mousePointer").classList.remove("show");
    });
</script>
@endsection
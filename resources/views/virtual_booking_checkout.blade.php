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
        <li><a href="{{route('book-online')}}" id="selectRoom-tab" onclick="openEvent(event, 'selectRoom')" class="tablinks active">Start Booking</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
        <li><a href="#" class="active">Checkout</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></li>
    </ul>
    <div class="contact-form">
        <div class="MainContent mb-5">
            <?php $count = 1; ?>
            <div id="checkout{{$count}}" class="tabcontent" style="">
              <form action="{{route('book-add')}}" method="post">
                @csrf
                <input type="text" class="form-control" name="name" value="{{$allData->name}}" hidden>
                <input type="text" class="form-control" name="email" value="{{$allData->email}}" hidden>
                <input type="number" class="form-control" name="phone" value="{{$allData->phone}}" hidden>
                <input type="text" class="form-control" name="starting_date" value="{{$startingdate}}" hidden>
                <input type="text" class="form-control" name="end_date" value="{{$endDate}}" hidden>
                <input type="text" class="form-control" name="message" value="{{$allData->message}}" hidden>
                <div class="row room">
                   
                    <div class="col-md-12">
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
                    
        </div>
    <form class="row gy-2 gx-3 mt-4  align-items-center"  action="{{route('book-check')}}" method="get">        
      @csrf
    
      <div class="row mb-5">
          <div class="col-md-6 col-lg-4">
            <input type="radio" id="month1" value="30" name="month" @if($allData->month == "30") selected @endif hidden>
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
            <input type="radio" id="month2" value="180" name="month" @if($allData->month == "180") selected @endif hidden>
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
            <input type="radio" id="month3" value="360" name="month" @if($allData->month == "360") selected @endif hidden>
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
          <div class="col-md-4">
          <div class="form-group mb-4">
          <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{$allData->name}}" required>
          @error('name')
          <div class="invalid-feedback d-block">{{$message}}</div>
          @enderror
          </div>
          </div>
          <div class="col-md-4">
          <div class="form-group mb-4">
          <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{$allData->email}}" required>
          @error('email')
          <div class="invalid-feedback d-block">{{$message}}</div>
          @enderror
          </div>
          </div>
          <div class="col-md-4">
          <div class="form-group">
          <input type="number" class="form-control" name="phone" placeholder="Phone" value="{{$allData->phone}}" required>
          @error('phone')
          <div class="invalid-feedback d-block">{{$message}}</div>
          @enderror
          </div>
          </div>
        
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif   
                <div id='calendar'></div>
                <input type="text" name="date" id="date" min="2023-06-20" value="{{$startingdate}}" hidden>
                @error('date')
                <div class="invalid-feedback d-block mt-1">{{$message}}</div>
                @enderror
              </div>
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



</main>
<?php
$arr = array(); 
foreach($booking_details as $booking_detail){
array_push($arr,array('start'=>$booking_detail->starting_date,
'end'=>$booking_detail->end_date,
'display'=>'background'
));
}

?>
<script>
 
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        let arr = <?php echo json_encode($arr); ?>;
        // console.log(new Date(Date.parse(arr[0].end)).getFullYear());
        let bg = 'background';
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          selectable: true,
          events: arr,
          select: function(selectionInfo ) {
            let strDate = selectionInfo.startStr;
            let inputDate = document.getElementById("date");
				console.log(selectionInfo.startStr);        
        console.log(inputDate.min <= selectionInfo.startStr);
        if(inputDate.min <= selectionInfo.startStr){
          inputDate.value=strDate;
        }
        else{
          alert("You can not add this date");
        }
				// console.log(selectionInfo.endStr);
				// alert(end);
				// $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
				// $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
				// $('#event_entry_modal').modal('show');
			},
        });
        calendar.render();
      });
</script>
@endsection
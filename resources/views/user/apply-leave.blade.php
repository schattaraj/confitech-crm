@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-6">
        <form action="{{route('leave-request')}}" method="post">
            @csrf
            @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{Session::get('error')}}</strong>
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{Session::get('success')}}</strong>
                        </div>
                    @endif
        <h4 class="">Request a Leave</h4>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
        <label for="">From Date<span class="text-danger">*</span></label>
        <input type="date" class="form-control" name="from_date" min="2023-08-18" id="from_date" onchange="date_change(); checkForm(this)" required>
        @error('from_date')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
    </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <label for="">Day <span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="from_day" required>
            <option value="full">Full</option>
            <option value="first_half">First Half</option>
            <option value="second_half">Second Half</option>
          </select>
        @error('from_date')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
    </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <label for="">To Date<span class="text-danger">*</span></label>
        <input type="date" class="form-control" name="to_date" min="2023-08-18" onclick="" id="to_date" onchange="date_change()" required>
        @error('to_date')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
        @enderror
    </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="">Day <span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="to_day" required>
            <option value="full">Full</option>
            <option value="first_half">First Half</option>
            <option value="second_half">Second Half</option>
          </select>
            </div>
        </div>
    </div>
 
    <!-- <div class="form-group d-none" id="day">
        <label for="">Day <span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="day" required>
            <option value="0.5">Half Day</option>
            <option value="1">Full Day</option>
          </select>
    </div> -->
    <div class="form-group">
        <label for="">Type of leave <span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="type_of_leave" required>
            @foreach ($type_of_leaves as $type_of_leave)
            <option value="{{$type_of_leave->id}}">{{$type_of_leave->type}}</option>
            @endforeach
          </select>
          @error('type_of_leave')
          <span class="invalid-feedback d-block" role="alert">
              <strong>{{ $message }}</strong>
          </span>
@enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Reason <span class="text-danger">*</span></label>
    <textarea name="reason" id="" rows="5" class="w-100 form-control" placeholder="Type here" required></textarea>
    @error('reason')
    <span class="invalid-feedback d-block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    </div>
    <div class="form-group mb-3">
    <label for="">Document</label>
    <input type="file" class="form-control" name="file"> 
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
</div>
{{-- <div class="col-md-4">
    <div class="form-group">
        <label for="">To</label>
        <input type="date" class="form-control" name="to">
    </div>
</div> --}}
<div class="col-md-6">
    <h4>Current Leave</h4>
    @error('reason_for_cancellation')
    <span class="alert alert-danger d-block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    <div id='calendar'></div>
</div>
{{-- <div class="col-md-8">
    <div class="form-group mb-3">
        <label for="">Reason</label>
    <textarea name="" id="" rows="5" class="w-100 form-control" placeholder="Type here"></textarea>
    </div>
    <button class="btn btn-primary">Submit</button>
</div> --}}
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Leave Request</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><b>From </b>- <span id="from"></span></p>
          <p><b>To </b>- <span id="to"></span></p>
          <p><b>Status </b>- <span id="status"></span></p>
          <button class="btn btn-danger d-none" onclick="cancelRequest()" data-bs-dismiss="modal">Cancel Request</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('cancel-leave')}}" method="post">
        @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel request for Pending leave request</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <input type="hidden" name="id" id="leave_id">
        <div class="form-group mt-0">
            <label for="">Reason for cancellation <span class="text-danger">*</span></label>
        <textarea name="reason_for_cancellation" id="" class="form-control" placeholder="Reason" required></textarea>
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </form>
  </div>

<?php
                $arr = array(); 
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
$time = date('h:i:s');
                foreach($leaves as $leave){
                //   $dateCreate=date_create($conference_booking->date);
                //  $dateSub = date_sub($dateCreate,date_interval_create_from_date_string("1 day"));
                $textColor = "#fff";
                if($leave->status == "Pending"){
                    $backgroundColor  = "#ffe95b";
                    $textColor = "#000";
                }
                elseif ($leave->status == "Approved") {
                    $backgroundColor = "#35b525";
                }   
                elseif ($leave->status == "Reject") {
                    $backgroundColor = "#ff0023";
                }
                else{
                    $backgroundColor = "#000";
                }
                array_push($arr,array(
                'id'=>$leave->id,    
                'title'=>$leave->status,
                'start'=>$leave->from_date,
                'end'=>$leave->to_date,
                'backgroundColor'=>$backgroundColor,
                'borderColor'=>$backgroundColor,
                'textColor'=>$textColor,
                ));
                }
                
                ?> 
@endsection
@push('custom-scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("from_date").value="";
        let date = new Date();
        let month = date.getMonth()+1;
        let day = date.getDate();
        if(month.toString().length < 2){
            month = "0"+month;
        }
        if(day.toString().length < 2){
            day = "0"+day;
        }
        document.getElementById("from_date").setAttribute("min",date.getFullYear()+'-'+month+'-'+day);
        document.getElementById("to_date").setAttribute("min",date.getFullYear()+'-'+month+'-'+day);
        console.log(date.getFullYear()+'-'+month+'-'+day);
      });
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = document.getElementById("exampleModal");
        var myModal = new bootstrap.Modal(document.getElementById("exampleModal"), {});
        let arr = <?php echo json_encode($arr); ?>;
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events: arr,
          eventClick: function(info) {
            myModal.show();
            $('#from').html(info.event.start);
            $('#to').html(info.event.end);
            $('#status').html(info.event.title);
            // if(info.event.title == "Pending"){
                $("#exampleModal .modal-body .btn").removeClass("d-none");
                $("#cancelModal .modal-body #leave_id").attr("value",info.event.id);
            // }
            // else{
            //     $("#exampleModal .modal-body .btn").addClass("d-none");
            // }
        //    let html = "<b>From</b> - "+ info.event.start +"<br> <b>To</b> - "+info.event.end;
        //     document.querySelector("#exampleModal .modal-body").innerHTML = html + "<h6>"+info.event.title+"</h6>";
        // alert('Event: ' + info.event.title);
        // alert('From: ' + info.event.start);
        // alert('To: ' + info.event.end);
        // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        // alert('View: ' + info.view.type);
    
        // change the border color just for fun
        info.el.style.borderColor = 'red';
      }
        });
        calendar.render();
    });
    function cancelRequest(){
      let cancelModal = new bootstrap.Modal(document.getElementById("cancelModal"), {});
      cancelModal.show();
    }
    async function checkForm(elm){
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        let loader = document.querySelector('.loader');
        loader.style.display="flex";
        const run = await fetch('@php echo route("validate-leave-form") @endphp',{
            method:'POST',
            header:{
                'Content-Type':'application/json',
                'X-CSRF-TOKEN':csrfToken
            },
            body:JSON.stringify({date:elm.value}),
        });
        const res = await run.json();
        console.log("Response",res);
        loader.style.display="none";
    }
    </script>
    @endpush

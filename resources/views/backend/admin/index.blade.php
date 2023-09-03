@extends('layouts.admin')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-3">
          <div class="card">
          <h4>Annual Leave</h4>
          <i class="fa-solid fa-calendar-days"></i>
          <h5>Available <span>:10</span></h5>
          <h5>Booked <span>:0</span></h5>
        </div>
      </div>
        <div class="col-md-3"><div class="card green">
          <h4>Casual Leave</h4>
          <i class="fa-solid fa-calendar-days"></i>
          <h5>Available <span>:04</span></h5>
          <h5>Booked <span>:0</span></h5>
        </div></div>
        <div class="col-md-3"><div class="card yellow">
          <h4>Sick Leave</h4>
          <i class="fa-solid fa-stethoscope"></i>
          <h5>Available <span>:10</span></h5>
          <h5>Booked <span>:0</span></h5>
        </div></div>
        <div class="col-md-3"><div class="card purple">
          <h4>Complementory off</h4>
          <i class="fa-solid fa-clock"></i>
          <h5>Available <span>:10</span></h5>
          <h5>Booked <span>:0</span></h5>
        </div></div>
      </div>
    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
                <tr>
                <th>Sl no.</th>
                <th>User name</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Type of leave</th>
                {{-- <th>Day</th>
                <th>Reason</th> --}}
                <th>Status</th>
                <th>Actions</th>
            </tr>
              </thead>
              <tbody>
              @foreach($leaves as $key => $leave)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$leave->name}}</td>
                    <td>{{$leave->from_date}}</td>
                    <td>{{$leave->to_date}}</td>
                    <td>{{$leave->type}}</td>
                    {{-- <td>{{$leave->day}}</td>
                    <td>{{$leave->reason}}</td>                     --}}
                    <td><div class="d-flex align-items-center"><span class="round {{strtolower($leave->status)}} me-2"></span>{{$leave->status}}</div></td>
                    <td><a href="{{route('view-leave',$leave->id)}}" title="Edit" class="edit-btn btn btn-sm mb-0">View</a></td>
                </tr>
              @endforeach
              </tbody>
        </table>
      </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')
<div class="">
    <div class="row d-none">
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
      <div class="d-flex justify-content-between mt-3">
        <h3>Employee Leaves</h3>
      <a href="{{route('add-employee-leave')}}" title="Edit" class="edit-btn btn btn-primary px-4 mb-0">Add</a>
      </div>
    
      <div class="table-responsive mt-3">
        <table class="table">
            <thead>
                <tr>
                <th>Sl no.</th>
                <th>User name</th>
                <th>Casual Leave</th>
                <th>Sick Leave</th>
                <th>Paid Leave</th>
                <th>Complementory off</th>
                <th>Actions</th>
            </tr>
              </thead>
              <tbody>
            @foreach($employee_leaves as $key => $employee_leave)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$employee_leave->name}}</td>
              <td>{{explode(",",$employee_leave->leaves_available)[0]}}</td>
              <td>{{explode(",",$employee_leave->leaves_available)[1]}}</td>
              <td>{{explode(",",$employee_leave->leaves_available)[2]}}</td>
              <td>{{explode(",",$employee_leave->leaves_available)[3]}}</td>
              <td><a href="{{route('edit-employee-leave',$employee_leave->id)}}" class="edit-btn btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
              </tbody>
        </table>
      </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')
<h3><h3>Employee List</h3></h3>
<div class="table-responsive mt-3">
    <table class="table">
        <thead>
            <tr>
            <th>Sl no.</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
          </thead>
          <tbody>
         @foreach($employees as $key => $employee)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->user_type}}</td>
                <td><div class="d-flex align-items-center"><span class="round {{strtolower($employee->status)}} me-2"></span>{{$employee->status}}</div></td>
                <td><a href="{{route('edit-employee',$employee->id)}}" class="edit-btn btn btn-primary">Edit</a></td>
            </tr>
         @endforeach
          </tbody>
    </table>
  </div>
@endsection
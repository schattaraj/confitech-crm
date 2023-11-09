@extends('layouts.admin')
@section('content')
<h3>Requests of leave cancellation</h3>
<div class="table-responsive mt-3">
        <table class="table">
            <thead>
                <tr>
                <th>Sl no.</th>
                <th>User name</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Cancellation Reason</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
              </thead>
              <tbody>
              @foreach($cancel_leaves as $key => $cancel_leave)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$cancel_leave->name}}</td>
                    <td>{{$cancel_leave->from_date}}</td>
                    <td>{{$cancel_leave->to_date}}</td>
                    <td>{{$cancel_leave->cancel_reason}}</td>
                    <td><div class="d-flex align-items-center"><span class="round {{strtolower($cancel_leave->status)}} me-2"></span>{{$cancel_leave->status}}</div></td>
                    <td><a href="{{route('view-cancel-request',$cancel_leave->id)}}" title="Edit" class="edit-btn btn btn-sm mb-0">View</a></td>
                </tr>
              @endforeach
              </tbody>
        </table>
      </div>
@endsection
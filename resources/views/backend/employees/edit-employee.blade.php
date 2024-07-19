@extends('elements.popup_pages')
@section('content')
<div id="content" class="content">

        <!-- begin page-header -->
        <h1 class="page-header">Edit Employee</h1>
        <!-- end page-header -->

        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            {{-- <a href="javascript:;" class="btn btn-primary" data-click="panel-expand" onclick="expand()">Expand</a> --}}
                                <a href="javascript:;" class="btn btn-success" data-click="panel-reload" onclick="refresh()">Refresh</a>
                        </div> 
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{Session::get('success')}}</strong>
                        </div>
                    @endif
                    @if(Session::has('failed'))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{Session::get('failed')}}</strong>
                        </div>
                    @endif
                    <form class="form-horizontal" action="{{route('update-employee')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$employee->id}}">
                            <div class="form-group">
                            <label class="control-label d-block">Photo</label>
                           <a href="{{$employee->photo}}" target="blank"><img src="{{$employee->photo}}" alt="" class="mb-3" style="height: 180px"></a>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Employee Name</label>
                                <input type="text" class="form-control" value="{{$employee->name}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Employee Id</label>
                                <input type="text" class="form-control" value="{{$employee->emp_id}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date of Birth</label>
                                <input type="text" class="form-control" value="{{$employee->dob}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Mobile Number</label>
                                <input type="text" class="form-control" value="{{$employee->mobile_number}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Aadhaar Card Number</label>
                                <input type="text" class="form-control" value="{{$employee->aadhaar_card}}" readonly>
                            </div>
                            <div class="form-group">
                            <label class="control-label d-block">Aadhaar Card Photos </label>
                           @foreach(json_decode($employee->aadhaar_card_photo) as $aadhar_card)
                           <a href="{{$aadhar_card}}" target="blank"><img src="{{$aadhar_card}}" alt="" class="mb-3" style="height: 180px; object-fit:contain;margin-right:10px;"></a>
                           @endforeach
                            
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">PAN Card</label>
                                <input type="text" class="form-control" value="{{$employee->pan_number}}" readonly>
                            </div>
                            <div class="form-group">
                            <label class="control-label d-block">Pan Card</label>
                           <a href="{{$employee->pan_photo}}" target="blank"><img src="{{$employee->pan_photo}}" alt="" class="mb-3" style="height: 180px; object-fit:contain;"></a>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Permanent Address</label>
                                <input type="text" class="form-control" value="{{$employee->permanent_address}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Residential Address</label>
                                <input type="text" class="form-control" value="{{$employee->residential_address}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Blood Group</label>
                                <input type="text" class="form-control" value="{{$employee->blood_group}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Emergency Contact</label>
                                <input type="text" class="form-control" value="{{$employee->emergency_contact}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Marital Status</label>
                                <input type="text" class="form-control" value="{{$employee->marital_status}}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender</label>
                                <input type="text" class="form-control" value="{{$employee->gender}}" readonly>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label class="col-md-3 control-label">User Type</label>
                                <select name="user_type" class="form-select">
                                    <option value="User"@if($employee->user_type == "User") selected @endif>User</option>
                                    <option value="Admin"@if($employee->user_type == "Admin") selected @endif>Admin</option>
                                </select>
                            </div>
                            @if($employee->joining_date == null)
                            <div class="form-group">
                                <label class="col-md-3 control-label">Joining date</label>
                                <input type="date" class="form-control" name="joining_date">
                                @error('joining_date')
                                    <span class="invalid-feedback mt-2 d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @endif
                            <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <select name="status" class="form-select" onchange="checkStatus()">
                                    <option value="Pending"@if($employee->status == "Pending") selected @endif>Pending</option>
                                    <option value="Approved"@if($employee->status == "Approved") selected @endif>Approved</option>
                                    <option value="Reject"@if($employee->status == "Reject") selected @endif>Reject</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Message</label>
                                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
@endsection
@extends('elements.popup_pages')
@section('content')
<div id="content" class="content">

        <!-- begin page-header -->
        <h1 class="page-header">View Cancel Request</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
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
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{route('update-cancel-request')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$cancel_leave->id}}">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <input type="text" value="{{$cancel_leave->name}}" name="name" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">From</label>
                                <input type="text" value="{{$cancel_leave->from_date}}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">To</label>
                                <input type="text" value="{{$cancel_leave->to_date}}" class="form-control" disabled>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-md-3 control-label">Type of leave</label>
                                <input type="text" value="{{$cancel_leave->type}}" class="form-control" disabled>
                            </div> -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Reason</label>
                                <input type="text" value="{{$cancel_leave->cancel_reason}}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <select name="status" class="form-select" onchange="checkStatus()">
                                    <option value="Pending"@if($cancel_leave->status == "Pending") selected @endif>Pending</option>
                                    <option value="Approved"@if($cancel_leave->status == "Approved") selected @endif>Approved</option>
                                    <option value="Reject"@if($cancel_leave->status == "Reject") selected @endif>Reject</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Reason for rejection</label>
                                <textarea name="reject_reason" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12" style="text-align: center">
                                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
    </div>
@endsection
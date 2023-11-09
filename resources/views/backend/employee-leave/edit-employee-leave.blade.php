@extends('elements.popup_pages')
@section('content')
<div id="content" class="content">

        <!-- begin page-header -->
        <h1 class="page-header">Edit Employee leave</h1>
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
                    <form class="form-horizontal" action="{{route('update-employee-leave')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$employee_leave->id}}">
                            <div class="form-group">
                                <label class="col-md-3 control-label">User</label>
                                <input type="text" class="form-control" value="{{$employee_leave->name}}" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">Paid leave</label>
                                <input type="number" min="0" name="paid_leave" value="{{explode(",",$employee_leave->leaves_available)[0]}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">Casual leave</label>
                                <input type="number" min="0" name="casual_leave" value="{{explode(",",$employee_leave->leaves_available)[1]}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">Sick leave</label>
                                <input type="number" min="0" name="sick_leave" value="{{explode(",",$employee_leave->leaves_available)[2]}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">Complementory off</label>
                                <input type="number" min="0" name="complementory_leave" value="{{explode(",",$employee_leave->leaves_available)[3]}}" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection
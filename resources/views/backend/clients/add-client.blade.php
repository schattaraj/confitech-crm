@extends('elements.popup_pages')
@section('content')
        <!-- begin page-header -->
        <h1 class="page-header">New Client</h1>
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
                    <form class="form-horizontal needs-validation" action="{{route('save-client')}}" method="post" enctype="multipart/form-data" novalidate>
                            {{csrf_field()}}
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Client Name/Company Name</label>
                                <input type="text" name="client_name" class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('client_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">POC name</label>
                                <input type="text" name="poc_name" class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('poc_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">POC Email</label>
                                <input type="text" name="poc_email" class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('poc_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Addressline 1</label>
                                <input type="text" name="client_address1" class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('client_address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">Addressline 2</label>
                                <input type="text" name="client_address2" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">Addressline 3</label>
                                <input type="text" name="client_address3" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">GSTIN</label>
                                <input type="text" name="gstin" class="form-control" onchange="getStateCode(this)">
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">State</label>
                                <input type="text" id="client_state" name="client_state" class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('client_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">State Code</label>
                                <input type="text" id="state_code" name="state_code" class="form-control">
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Country</label>
                                <input type="text" name="client_country" class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('client_country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>                            
                            <div class="form-group mb-3">
                                <label class="col-md-3 control-label">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection
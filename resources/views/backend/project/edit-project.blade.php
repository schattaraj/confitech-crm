@extends('elements.popup_pages')
@section('content')
<div id="content" class="content">

        <!-- begin page-header -->
        <h1 class="page-header">Edit Project Details</h1>
        <!-- end page-header -->

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
                    @if(Session::has('failed'))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{Session::get('failed')}}</strong>
                        </div>
                    @endif
                    <form class="form-horizontal needs-validation" action="{{route('update-project')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="project_id" value="{{$project->id}}">
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Project Name</label>
                                <input type="text" name="project_name" class="form-control" value="{{$project->project_name}}" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('project_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Select Client</label>
                                <select name="client" id="" class="form-select" onchange="addClient(this)" required>
                                    <option value="">Please Select a Client</option>                         
                                    @forEach($clients as $client)
                                    <option value="{{$client->id}}" @if($project->client_id == $client->id) selected @endif>{{$client->client_name}}</option>
                                    @endforeach
                                    <option value="addNew">+ Add new client</option>
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                                @error('client')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Commercial</label>
                                <input type="text" name="commercial" class="form-control" value="{{$project->commercial}}" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Resources</label>
                                <input type="text" name="resources" class="form-control" value="{{$project->resources}}" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Description</label>
                                <input type="text" name="description" class="form-control" value="{{$project->description}}" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label d-block">Document</label>
                               <a href="{{$project->document}}" target="blank"><img src="{{$project->document}}" alt=""></a>
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Update Document</label>
                                <input type="file" name="document"  class="form-control">
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection
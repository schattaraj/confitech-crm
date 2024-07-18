@extends('elements.popup_pages')
@section('content')
        <!-- begin page-header -->
        <h1 class="page-header">New Project</h1>
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
                    <form class="form-horizontal needs-validation" action="{{route('save-project')}}" method="post" enctype="multipart/form-data" novalidate>
                            {{csrf_field()}}
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Project Name</label>
                                <input type="text" name="project_name" class="form-control" required>
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
                                    <option value="{{$client->id}}">{{$client->client_name}}</option>
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
                               <div class="input-group">
                               <select name="currency" id="" class="form-select me-2" style="max-width:200px">
                                    <option value="INR">INR - Indian Rupee</option>
                                    <option value="EUR">INR - Euro</option>
                                    <option value="USD">USD - US Dollar</option>
                                    <option value="CAD">CAD - Canadian Dollar</option>
                                    <option value="AUD">AUD - Australian Dollar</option>
                                </select>
                                <input type="text" name="commercial" class="form-control" required>
                               </div>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <div class="form-group mb-4 required">
                                <label class="col-md-3 control-label">Resources</label>
                                <div class="d-flex align-items-center mb-3">
                                    <input type="radio" class="form-check-input me-1 mt-0" name="check" id="vendor" onchange="checkResource()" checked><label for="vendor" class="mb-0 me-4">Vendor</label>
                                    <input type="radio" class="form-check-input me-1 mt-0" name="check" id="employee" onchange="checkResource()"><label for="employee" class="mb-0">Employee</label>
                                </div>
                                <!-- <input type="text" name="resources" class="form-control" required> -->
                                <select name="resources" id="vendors" class="form-select">
                                    <option value="">Select a vendor</option>
                                    @foreach($vendors as $vendor)
                                    <option value="{{$vendor->name}}">{{$vendor->name}}</option>
                                    @endforeach
                                </select>
                                <select name="resources" id="employees" class="form-select">
                                <option value="">Select an employee</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Description</label>
                                <input type="text" name="description" class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <div class="form-group mb-3 required">
                                <label class="col-md-3 control-label">Document</label>
                                <input type="file" name="document"  class="form-control" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong>This field is required</strong> 
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<script>
     function changeResource(){
        checkResource();
    }
function checkResource(){
 let vendorCheck = document.getElementById("vendor");
 let employeeCheck = document.getElementById("employee");
 console.log("vendorCheck",vendorCheck.checked);
 if(vendorCheck.checked){
  document.getElementById("vendors").style.display="block";
  document.getElementById("employees").style.display="none";
 }
 if(employeeCheck.checked){
  document.getElementById("employees").style.display="block";
  document.getElementById("vendors").style.display="none";
 }
}
checkResource();
</script>
@endsection
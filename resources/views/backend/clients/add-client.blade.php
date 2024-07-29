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
                    {{-- <a href="javascript:;" class="btn btn-primary" data-click="panel-expand"
                        onclick="expand()">Expand</a> --}}
                    <a href="javascript:;" class="btn btn-success" data-click="panel-reload"
                        onclick="refresh()">Refresh</a>
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
            <form class="form-horizontal needs-validation" action="{{route('save-client')}}" method="post"
                enctype="multipart/form-data" novalidate>
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
                <div id="input_name">
                    <div class="form-group mb-3 required">

                        <label class="col-md-3 control-label" name="">POC name</label>
                        <input type="text" name="poc_name[0][name]" class="form-control" required>
                        <span class="invalid-feedback" role="alert">
                            <strong>This field is required</strong>
                        </span>
                        @error('poc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="add_new_box w-100">
                    <button id="rowAdder1" type="button" class="add-button btn btn-success add_new_btn">
                        {{-- <button type="button" class="add-button btn btn-success add_new_btn" onclick="addField()">
                            --}}
                            Add New Field
                        </button>
                </div>
                <div id="input_email">
                <div class="form-group mb-3 required">
                    <label class="col-md-3 control-label">POC email</label>
                    <input type="text" name="poc_email[0][email]" class="form-control" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>This field is required</strong>
                    </span>
                    @error('poc_email')
                    <div class="form-group mb-3 required">
                        <label class="col-md-3 control-label">POC email</label>
                        <input type="text" name="poc_email[0][email]" class="form-control" required>
                        <span class="invalid-feedback" role="alert">
                            <strong>This field is required</strong>
                        </span>
                        @error('poc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                </div>
                <div class="add_new_box w-100">
                    <button id="rowAdder2" type="button" class="add-button btn btn-success add_new_btn">
                        Add New Field
                    </button>
                </div>
                <div id="input_number">
                <div class="form-group mb-3 required">
                    <label class="col-md-3 control-label">POC phone number</label>
                    <input type="text" name="poc_number[0][number]" class="form-control" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>This field is required</strong>
                    </span>
                    @error('poc_number')
                    <div class="form-group mb-3 required">
                        <label class="col-md-3 control-label">POC phone number</label>
                        <input type="text" name="poc_number[0][number]" class="form-control" required>
                        <span class="invalid-feedback" role="alert">
                            <strong>This field is required</strong>
                        </span>
                        @error('poc_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                </div>
                <div class="add_new_box w-100">
                    <button id="rowAdder3" type="button" class="add-button btn btn-success add_new_btn">
                        Add New Field
                    </button>
                </div>



                <div class="chk_gst">
                    <input type="checkbox" id="myCheck" onclick="myFunction()">
                    <label for="myCheck">Are you GSTIN registered :</label>
                </div>

                <div class="form-group mb-3 gst_fld" >
                    <label class="col-md-3 control-label">GSTIN</label>
                    <input type="text" name="gstin" class="form-control" onchange="getStateCode(this)">
                </div>
                <div id="input_address">
                    <div class="form-group mb-3 required">
                        <label class="col-md-3 control-label">Addressline 1</label>
                        <textarea name="client_address1[0][address]" id="add1" class="form-control" required></textarea>
                        <span class="invalid-feedback" role="alert">
                            <strong>This field is required</strong>
                        </span>
                        @error('client_address1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>              
                </div>

                <div id="input_address"></div>
                <div class="add_new_box w-100">
                    <button id="address_fld" type="button" class="add-button btn btn-success add_new_btn">
                        Add another Address
                    </button>
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

                <div id="input_group"></div>

                <div class="add_new_box w-100">
                    <button class="add-button btn btn-success add_new_btn" onclick="grpFld()">Add Group Field</button>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function grpFld() {
            const divEle = document.getElementById("input_group");
            divEle.innerHTML += `
            <div>
                <div class="form-group mb-3 gst_fld">
                    <label class="col-md-3 control-label">GSTIN</label>
                    <input type="text" name="gstin" class="form-control" onchange="getStateCode(this)">
                </div>

                <div class="form-group mb-3 required">
                        <label class="col-md-3 control-label">Addressline 1</label>
                        <textarea name="client_address1" id="add1" class="form-control" required></textarea>
                        <span class="invalid-feedback" role="alert">
                            <strong>This field is required</strong>
                        </span>
                        @error('client_address1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div id="input_address"></div>
                    <div class="add_new_box w-100">
                        <button id="address_fld" type="button" class="add-button btn btn-success add_new_btn">
                            Add another Address
                        </button>
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

            </div>
            `;
        }
    </script>


    <script>
        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementsByClassName("gst_fld");
            for (var i = 0; i < text.length; i++) {
                if (checkBox.checked == true) {
                    text[i].style.display = "block";
                } else {
                    text[i].style.display = "none";
                }
            }
        }
    </script>
    {{--
    <script>
        function addField() {
            const container = document.getElementById('input_name');
            const fieldCount = container.children.length;
            const newField = document.createElement('div');
            newField.innerHTML = `
       
            <input type="text" name="poc_name[${fieldCount}][name]" class="form-control" placeholder="Client Name" required>
            <button type="button" onclick="removeField(this)">Remove</button>
        `;
            container.appendChild(newField);
        }

        function removeField(button) {
            button.parentElement.remove();
            updateFieldNames(); // Ensure the indices are updated after removing a field
        }

        function updateFieldNames() {
            const container = document.getElementById('dynamic-fields');
            const inputs = container.getElementsByTagName('input');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].name = `poc_name[${i}][name]`;
            }
        }
    </script> --}}
    <script type="text/javascript">
        $("#rowAdder1").click(function () {
            const container = document.getElementById('input_name');
            const fieldCount = container.children.length;
            const newRowAdd = document.createElement('div');
            newRowAdd.innerHTML =
                '<div id="row"> <div class="new_input mb-3">' +
                '<div class="input-group-prepend">' +
                `<input type="text" name="poc_name[${fieldCount}][name]" class="form-control" required>
                    `+
                ' </div> ' +
                '<a class="cross_btn" id="DeleteRow">x</a></div></div>';

            $('#input_name').append(newRowAdd);
        });
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })

    </script>

    <script type="text/javascript">
        $("#rowAdder2").click(function () {
            const container = document.getElementById('input_email');
            const fieldCount = container.children.length;
            const newRowAdd = document.createElement('div');
            newRowAdd.innerHTML =
                '<div id="row"> <div class="new_input mb-3">' +
                '<div class="input-group-prepend">' +
                `<input type="text" name="poc_email[${fieldCount}][email]" class="form-control"> </div> ` +
                '<a class="cross_btn" id="DeleteRow">x</a></div></div>';

            $('#input_email').append(newRowAdd);
        });
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>

    <script type="text/javascript">
        $("#rowAdder3").click(function () {
            const container = document.getElementById('input_number');
            const fieldCount = container.children.length;
            const newRowAdd = document.createElement('div');
            newRowAdd.innerHTML =
                '<div id="row"> <div class="new_input mb-3">' +
                '<div class="input-group-prepend">' +
                `<input type="text" name="poc_number[${fieldCount}][number]" class="form-control"> </div> ` +
                '<a class="cross_btn" id="DeleteRow">x</a></div></div>';

            $('#input_number').append(newRowAdd);
        });
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>

    <script type="text/javascript">
        $("#address_fld").click(function () {
            const container = document.getElementById('input_address');
            const fieldCount = container.children.length;
            const newRowAdd = document.createElement('div');
            newRowAdd.innerHTML =
                '<div id="row"> <div class="new_input mb-3">' +
                '<div class="input-group-prepend">' +
                `<textarea name="client_address1[${fieldCount}][address]" id="add1" class="form-control"></textarea> </div>`  +
                '<a class="cross_btn" id="DeleteRow">x</a></div></div>';

            $('#input_address').append(newRowAdd);
        });
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>

    @endsection
@extends('layouts.admin')

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing" id="cancel-rowx">
        <div id="wizards_pills" class="col-lg-12">
            <div class="seperator-header">
               
                {{-- <a href="{{ route('admin.bom.add') }}">
                    <h4 class="btn-primary"><i data-feather="plus"></i> Add New BOM</h4>
                </a> --}}
            </div>
            @if (session()->get('error'))
                <div class="alert alert-warning">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
             <div class="statbox widget box box-shadow">
                 <div class="widget-content widget-content-area">
                     <table id="datatable-tabletools" class="table table-hover non-hover individual-col-search" style="width:100%">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>User ID</th>
                                 <th>Meeting Type</th>
                                 <th>Meeting Date</th>
                                 <th>Meeting Time</th>        
                                 <th>Time From</th>
                                 <th>Time Until</th>
                                 <th>No. of People</th>                                
                             </tr>
                             <?php $count = 0; ?>
                            
                         </thead>
                         <tbody>
                          
                         </tbody>
                         
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endsection
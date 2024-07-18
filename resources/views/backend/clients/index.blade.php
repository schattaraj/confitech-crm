@extends('layouts.admin')
@section('content')
<div class="">
      <div class="d-flex justify-content-between mt-3">
        <h3>Clients</h3>
      <a href="{{route('add-client')}}" title="Edit" class="edit-btn btn btn-primary px-4 mb-0">Add</a>
      </div>
    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
                <tr>
                <th>Sl no.</th>
                <th>Client Name</th>
                <th>POC Name</th>
                <th>Country</th>
                <th>State</th>
                <th>GSTIN</th>
                <th>Status</th>
                <th>Actions</th>                
            </tr>
              </thead>
              <tbody>
          @forEach($clients as $client)
          @php $count = 1; @endphp
                <tr>
                  <td>{{$count}}</td>
                  <td>{{$client->client_name}}</td>
                  <td>{{$client->poc_name}}</td>
                  <td>{{$client->client_country}}</td>
                  <td>{{$client->client_state}}</td>
                  <td>{{$client->gstin}}</td>
                  <td>
                  <div class="toggle-button ms-3">
                    <form action="{{route('client-status')}}" id="status-form" method="post">
                      @csrf
                      <input type="hidden" value="{{$client->id}}" name="client_id">
                    <input class='input-switch' name="status" type="checkbox" id="demo" {{($client->status == 'Active') ? 'checked' : ''}} onchange="updateStatus()"/>
<label class="label-switch" for="demo"></label>
<span class="info-text"></span>
</form>
</div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                    <a href="{{route('edit-client',$client->id)}}" class="edit-btn btn btn-primary mb-0 me-2">Edit</a>
                    <a href="#" class="edit-btn btn btn-primary mb-0">View</a>
                   
                  </td>
                
                </tr>
                @php $count++; @endphp
          @endforeach
              </tbody>
        </table>
      </div>
</div>
@endsection
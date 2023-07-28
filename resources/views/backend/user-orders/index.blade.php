@extends('layouts.admin')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Select category</label>
                <select class="form-control js-example-basic-multiple" id="exampleFormControlSelect1" onchange="fetchMenu(this)">
                    <option value="">Select category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach                  
                </select>
              </div>
              <div class="form-group">
                <label for="menu">Product</label>
                <select class="form-control js-example-basic-multiple" id="menu" onchange="selectMenu(this)" disabled>
                  <option>Select an item</option>
                </select>
              </div>
            </div>
          </div>
           
              <table class="table">
                  <tr>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Order Qty</th>
                      <th>Amount</th>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" class="form-control" id="menu-name" readonly>
                          <input type="text" class="form-control" id="menu-id" hidden>
                        </td>
                      <td><input type="text" class="form-control" id="price" readonly></td>
                      <td><input type="number" class="form-control" id="order-qty"></td>
                      <td><button class="btn btn-success" onclick="addItem()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></td>
                  </tr>
              </table>
              <table class="table d-none" id="list-table">
                <thead>
                <tr>
                    <th>Menu Name</th>
                    <th>Price</th>
                    <th>Order Qty</th>
                    <th>Order Amount</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody id="showList"></tbody>
              <tfoot>
                <tr>
                  <td></td>
                  <td></td>
                  <td><b>Total Amount</b></td>
                  <td id="total-amount"></td>
                  <td></td>
                  
                </tr>
              </tfoot>
              </table>
              <button class="ml-auto d-block btn btn-success px-5" onclick="saveOrder()">Save</button>
                </div>
    </div>
</div>
@endsection
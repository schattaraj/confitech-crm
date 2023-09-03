@extends('layouts.admin')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Amount (Rs.)</th>
                    <th>Created At</th>
                </thead>
                <tbody>
                    @foreach($order_detail as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->productName->item_name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->amount}}</td>
                        <td>{{$item->created_at->format('d-m-Y h:m:s')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection
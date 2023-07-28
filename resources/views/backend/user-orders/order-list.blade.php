@extends('layouts.admin')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <table class="table">
                <thead>
                    <th>Order Id</th>
                    <th>Total Quantity</th>
                    <th>Total Amount (Rs.)</th>
                    <th>Created At</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($order_master as $item)
                    <tr>
                        <td>{{$item->order_id}}</td>
                        <td>{{$item->total_qty}}</td>
                        <td>{{$item->total_amount}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><a href="{{route('orderDetail',$item->id)}}" class="btn btn-success">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection
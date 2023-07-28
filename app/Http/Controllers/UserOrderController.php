<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\app_user;
use App\Models\food_item; 
use App\Models\new_order_detail; 
use App\Models\new_order_master;
use Illuminate\Support\Str; 

class UserOrderController extends Controller
{
    function index(){
       $categories = category::get();
        return view('backend.user-orders.index',compact('categories'));
    }

    function menu(Request $request,$id){
        $menus = food_item::where('cat_id',$id)->get();
        return response()->json($menus);
    }
    function saveOrder(Request $request){
        $list = $request->all();

        $order_id = Str::uuid()->toString();
        $totalAmount = 0;
        $total_qty = 0;
        try{
            foreach($list as $item){
                $totalAmount = $totalAmount + ($item['item_mrp'] * number_format($item['order_qty']));
                $total_qty = $total_qty + number_format($item['order_qty']);
                // $total = number_format($item['order_qty']);
            }
            $master_order = new_order_master::create([
                "order_id" => $order_id,
                "total_qty" => $total_qty,
                "total_amount" => $totalAmount
            ]);
            // $master_order = new_order_master::where('order_id',$order_id)->first();
            foreach($list as $item){
                new_order_detail::create([
                    "new_order_id"=>$master_order->id,
                    "item_id"=>$item['id'],
                    "price"=>$item['item_mrp'],
                    "qty" => number_format($item['order_qty']),
                    "amount" => $item['item_mrp'] * number_format($item['order_qty'])
                ]);
            }
        } catch(Exception $e){
            return response()->json($e);
        }
        return response()->json($master_order);
    }
    function orderList(){
        $order_master = new_order_master::orderBy('created_at', 'DESC')->get();
        return view('backend.user-orders.order-list',compact('order_master'));
    }
    function orderDetail(Request $request,$id){
        $order_detail = new_order_detail::with('productName')->where('new_order_id',$id)->get();
        dd($order_detail);
        return view('backend.user-orders.order-detail',compact('order_detail'));
    }
}

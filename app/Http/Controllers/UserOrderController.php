<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\user;
use App\Models\food_item; 
use App\Models\new_order_detail; 
use App\Models\new_order_master;
use App\Models\slot;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\DB;

class UserOrderController extends Controller
{
    function index(Request $request){
       $categories = category::get();
       $slots = slot::get();
       $session =  $request->session()->get('admin-user');
       $userData = user::where('email',$session)->first();
       $check = new_order_master::where('user_id',$userData->id)->where('created_at', 'like', date("Y-m-d")."%")->first();
       if($check){
        session()->flash('alert', "You Can't add more for today");
       }
        return view('backend.user-orders.index',compact('categories','slots'));
    }
    function categoryName($id){
        $category = category::where('id',$id)->first();
        return response()->json($category);
     }
    function menu(Request $request,$id){
        // $menus = food_item::where('cat_id',$id)->get();
        $menus = DB::table('food_items')->join('categories','food_items.cat_id','=','categories.id')->where('cat_id',$id)->get();
        return response()->json($menus);
    }

   public function saveOrder(Request $request){
        $list = $request->orders;
        $order_id = Str::uuid()->toString();
        $totalAmount = 0;
        $total_qty = 0;
        $slot_id = $request['slot_id']; 
        try{
            $session =  $request->session()->get('admin-user');
       $userData = user::where('email',$session)->first();
       $check = new_order_master::where('user_id',$userData->id)->where('created_at', 'like', date("Y-m-d")."%")->first();
       if(!$check){
        foreach($list as $item){
            foreach($item['data'] as $order){
                $totalAmount = $totalAmount + ($order['item_mrp'] * number_format($order['qty']));
                $total_qty = $total_qty + number_format($order['qty']);
            }
        }
        $master_order = new_order_master::create([
            "order_id" => $order_id,
            "total_qty" => $total_qty,
            "total_amount" => $totalAmount,
            "slot_id"=>$slot_id,
            "user_id" => $userData->id
        ]);
        foreach($list as $item){
            foreach($item['data'] as $order){
                if($order['qty'] > 0){
                    new_order_detail::create([
                        "new_order_id"=>$master_order->id,
                        "item_id"=>$order['id'],
                        "price"=>$order['item_mrp'],
                        "qty" => number_format($order['qty']),
                        "amount" => $order['item_mrp'] * number_format($order['qty'])
                    ]);
                }           
        }
    }
    return response()->json("Success fully added");
       }
       else{
        return response()->json("You Can't add more for today");
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
        // dd($order_detail);
        return view('backend.user-orders.order-detail',compact('order_detail'));
    }
}

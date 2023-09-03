<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\type_of_leave;
use App\Models\leave;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Session;

class LeaveController extends Controller
{
  function index(){
    $type_of_leaves = type_of_leave::get();
    $session =  Session::get('user');
    $userData = User::where('email',$session)->first();
    $leaves = leave::where('user_id',$userData['id'])->get();
    return view('backend.apply-leave',compact('type_of_leaves','leaves'));
  }
  function leaveRequest(Request $request){
    $request ->validate([
        'from_date' => 'required',
        'to_date' => 'required',
        'type_of_leave' => 'required',
        'reason' => 'required',
      ]);
      $day = 0;
      if($request->from_date == $request->to_date){
       return $day = $request->day;
      }
     $session =  $request->session()->get('user');
     $userData = User::where('email',$session)->first();
    //  $data = leave::create([
    //     'from_date' => $request->from_date,
    //     'to_date' => $request->to_date,
    //     'type_of_leave' => $request->type_of_leave,
    //     'day' =>  $day,
    //     'reason' => $request->reason,
    //     'user_id' => $userData['id'],
    //     'status'=>'Pending'
    //   ]);
      // return date('Y-m-d');
      return $day;
  }
  function adminDashboard(){
    $leaves = DB::table('leaves')->join('users','leaves.user_id','=','users.id')->join('type_of_leaves','leaves.type_of_leave','=','type_of_leaves.id')->select('leaves.*','users.name','type_of_leaves.type')->get();
    return view('backend.admin.index',compact('leaves'));
  }
  function viewLeave($id){
   $leave = DB::table('leaves')->where('leaves.id',$id)->join('users','leaves.user_id','=','users.id')->join('type_of_leaves','leaves.type_of_leave','=','type_of_leaves.id')->select('leaves.*','users.name','type_of_leaves.type')->first();
   return view('backend.admin.view-leave',compact('leave'));
  }
  function updateLeave(Request $request){
    leave::where('id',$request->id)->update([
      "status"=>$request->status
    ]);
    return redirect()->back()->with('success','Updated Successfully !!!');
    // return $request->all();
  }
}

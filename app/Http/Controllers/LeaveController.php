<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\type_of_leave;
use App\Models\leave;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\cancel_leave;
use App\Models\employee_leave;
use App\Models\standard_leave;

class LeaveController extends Controller
{
  function index(){
    $type_of_leaves = type_of_leave::get();
    $session =  Session::get('user');
    $userData = User::where('email',$session)->first();
    leave::where('user_id',$userData['id'])->where('status','=','Pending')->where('from_date','<',date('Y-m-d'))->update([
      "status"=>"Not Approved"
    ]);
    // return date('Y-m-d');
    $leaves = leave::where('user_id',$userData['id'])->orderBy('id', 'desc')->get();
    return view('user.apply-leave',compact('type_of_leaves','leaves'));
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
      $day = $request->day;
      }
     $session =  $request->session()->get('user');
     $userData = User::where('email',$session)->first();
     $pendings = leave::where('user_id',$userData['id'])->where('status','Pending')->get();
    if(count($pendings) > 0){
      return redirect()->back()->with('error',"You already have a pending request !!!");
    }
     $data = leave::create([
        'from_date' => $request->from_date,
        'to_date' => $request->to_date,
        'type_of_leave' => $request->type_of_leave,
        'day' =>  $day,
        'reason' => $request->reason,
        'user_id' => $userData['id'],
        'status'=>'Pending'
      ]);
      return redirect()->back()->with('success',"Request submitted succesfully !!!");
      // return date('Y-m-d');
      // return $day;
  }
  function adminDashboard(){
    $leaves = DB::table('leaves')->join('users','leaves.user_id','=','users.id')->join('type_of_leaves','leaves.type_of_leave','=','type_of_leaves.id')->select('leaves.*','users.name','type_of_leaves.type')->orderBy('id', 'desc')->get();
    $standard_leaves = standard_leave::get();
    return view('backend.admin.index',compact('leaves','standard_leaves'));
  }
  function viewLeave($id){
   $leave = DB::table('leaves')->where('leaves.id',$id)->join('users','leaves.user_id','=','users.id')->join('type_of_leaves','leaves.type_of_leave','=','type_of_leaves.id')->select('leaves.*','users.name','type_of_leaves.type')->first();
   return view('backend.admin.view-leave',compact('leave'));
  }
  function updateLeave(Request $request){
    $leave  = leave::where('id',$request->id)->first();
    $reject_reason=null;
    $employee_leave = employee_leave::where('user_id',$leave['user_id'])->first();
    $type = $leave->type_of_leave;
    $available_leaves = explode(',',$employee_leave->leaves_available);
    $count = $available_leaves[$type-1];
    if($request->status == "Reject"){
      $request ->validate([
        'reason' => 'required',
      ]);
      $reject_reason = $request->reason;
    }
    if($request->status == "Approved"){
      $available_leaves[$type-1] = $count - 1;
      employee_leave::where('user_id',$leave['user_id'])->update([
        "leaves_available"=>implode(",",$available_leaves)
      ]);
    }
    leave::where('id',$request->id)->update([
      "status"=>$request->status,
      "reject_reason"=>$reject_reason
    ]);
    return redirect()->back()->with('success','Updated Successfully !!!');
    // return $request->all();
  }

  function cancelRequest(Request $request){
    $request ->validate([
      'reason_for_cancellation' => 'required',
      'id' => 'required',
    ]);
    $reason_for_cancellation = $request->reason_for_cancellation;
    $leave_id = $request->id;
    $session =  Session::get('user');
    $userData = User::where('email',$session)->first();
  $pending_leave = leave::where('user_id',$userData['id'])->where('id',$leave_id)->first();
  $cancel_leave = cancel_leave::where('leave_id',$leave_id)->first();
  if($cancel_leave){
    cancel_leave::where('leave_id',$leave_id)->update([
      "cancel_reason" => $reason_for_cancellation
    ]);
  }
  else{
    cancel_leave::create([
      'leave_id' => $pending_leave['id'],
      'cancel_reason' => $reason_for_cancellation,
      'status'=> 'Pending'
    ]);
  }
    
    return redirect()->back()->with('success','Updated Successfully !!!');
  }

  function cancelRequestsView(){
    $cancel_leaves = cancel_leave::join('leaves','cancel_leaves.leave_id','=','leaves.id')->join('users','leaves.user_id','=','users.id')->select('cancel_leaves.*','leaves.from_date','leaves.to_date','users.name')->get(); 
    return view('backend.admin.cancel-requests',compact('cancel_leaves'));
  }

  function cancelRequestSingleView($id){
    $cancel_leave = cancel_leave::where('cancel_leaves.id',$id)->join('leaves','cancel_leaves.leave_id','=','leaves.id')->join('users','leaves.user_id','=','users.id')->select('cancel_leaves.*','leaves.from_date','leaves.to_date','users.name')->first(); 
    return view('backend.admin.view-cancel-request',compact('cancel_leave'));
  }

  function updateCancelRequest(Request $request){
   $id = $request->id;
   $status = $request->status;
   if($status == "Approved"){
    cancel_leave::where('id',$id)->update([
      "status" => $status
    ]);
    $cancel_leave = cancel_leave::where('id',$id)->first();
    $cancel_leave_id = $cancel_leave->leave_id; 
    $leave = leave::where('id',$cancel_leave_id)->first();
    leave::where('id',$cancel_leave_id)->update([
      "status" => 'Cancel'
    ]);
    $employee_leave = employee_leave::where('user_id',$leave['user_id'])->first();
    $type = $leave->type_of_leave;
    $available_leaves = explode(',',$employee_leave->leaves_available);
    $count = $available_leaves[$type-1];
    $available_leaves[$type-1] = $count + 1;
    employee_leave::where('user_id',$leave['user_id'])->update([
        "leaves_available"=>implode(",",$available_leaves)
    ]);
   }
   elseif($status == "Reject"){
    cancel_leave::where('id',$id)->update([
      "reject_reason" => $request->reject_reason,
      "status" => $status
    ]);
   }
   return redirect()->back()->with('success','Updated Successfully !!!');
  }

  function employeeLeaves(){
$employee_leaves = employee_leave::select('employee_leaves.*','users.name')->join('users','employee_leaves.user_id','=','users.id')->get();
return view('backend.employee-leave.index',compact('employee_leaves'));
  }
  function addEmployeeLeave(){
    $users = User::select('users.name','users.id')->where('users.id','<>','employee_leaves.user_id')->get();
    return view('backend.employee-leave.add-employee-leave',compact('users'));
  }
  function saveEmployeeLeave(Request $request){
    $request ->validate([
      'user_id' => 'required',
      'paid_leave' => 'required',
      'casual_leave' => 'required',
      'sick_leave' => 'required',
      'complementory_leave'=>'required'
    ]);
    $leave_available = array($request->paid_leave,$request->casual_leave,$request->sick_leave,$request->complementory_leave);
    $string=implode(",",$leave_available);
    $check = employee_leave::where('user_id',$request->user_id)->first();
    if($check){
      return redirect()->back()->with('failed','Already Added !!!');
    }    
    employee_leave::create([
      "user_id"=>$request->user_id,
      "leaves_available" => $string,
    ]);
    return redirect()->back()->with('success','Added Successfully !!!');
  }
  function editEmployeeLeave($id){
    $employee_leave = employee_leave::select('employee_leaves.*','users.name')->join('users','employee_leaves.user_id','=','users.id')->where('employee_leaves.id',$id)->first();
    return view('backend.employee-leave.edit-employee-leave',compact('employee_leave'));
  }
  function updateEmployeeLeave(Request $request){
   $id = $request->id;
   $request ->validate([
    'id' => 'required',
    'paid_leave' => 'required',
    'casual_leave' => 'required',
    'sick_leave' => 'required',
    'complementory_leave'=>'required'
  ]);
  $leave_available = array($request->paid_leave,$request->casual_leave,$request->sick_leave,$request->complementory_leave);
  $string=implode(",",$leave_available);
   employee_leave::where('id',$id)->update([
    "leaves_available" => $string,
   ]);
   return redirect()->back()->with('success','Updated Successfully !!!');
  }

}

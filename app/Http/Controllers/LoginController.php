<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\standard_leave;
use App\Models\employee_leave;


class LoginController extends Controller
{
    public function index(Request $req){
      $req ->validate([
        'email' => 'required',
        'password' => 'required'
      ]);
    $email = User::select('email')->where('email',$req['email'])->get();
        if(!$email->isEmpty()){
         $user_type = User::where('email',$req['email'])->first();
          if (Hash::check($req->password, $user_type->password)) {              
            $name = $user_type['name'];
            $user = $user_type['email'];
            $req->session()->put('name',$name);
            $req->session()->put('email',$user);
            if($user_type['status'] != 'Approved'){
              $error = "Contact to admin";
            return redirect('/login')->with('error',$error);
            }
            if($user_type['user_type'] == "Admin"){
               $req->session()->put('admin-user',$user);
              return redirect('/admin-dashboard');
            }
            else{
           $req->session()->put('user',$user);
              return redirect('/');
            }
            return redirect('/');
            // if($user_type['user_type'] == "Admin"){
            //     $req->session()->put('admin-user',$user);
            //     $req->session()->put('user_name',$name);
            //     return redirect('/admin');
            //     // if(Cookie::get('route-name')){
            //     //   return redirect(Cookie::get('route-name'));
            //     // }
            //     // else{
            //     //   return redirect()->back()->with('name',$name);
            //     // }               
                
            // }
            // else{
            //     $req->session()->put('user',$user);
            //     $req->session()->put('user_name',$name);
            //     if(Cookie::get('route-name')){
            //       return redirect(Cookie::get('route-name'));
            //     }
            //     else{
            //       return redirect()->back()->with('name',$name);
            //     }
            // }              
         }  
          else{
            $error = "password incorrect";
            return redirect('/login')->with('error',$error);
          }         
        }
        else{
            $error = "Username does not exist";
            return redirect('/login')->with('error',$error);
            // return view('frontend.pages.login',compact('error'));
        }
    }
    public function EmployeeList(){
      $employees = User::orderBy('id', 'desc')->get();
      return view('backend.employees.index',compact('employees'));
    }
    public function EditEmployee($id){
      $employee = User::where('id',$id)->first();
      return view('backend.employees.edit-employee',compact('employee'));
    }
    public function UpdateEmployee(Request $request){
      $id = $request->id;
      $status = $request->status;
     $user =  User::where('id',$id)->first();
     $joining_date = $user['joining_date'];
      if($status == "Approved"){
        $request ->validate([
          'joining_date' => 'required',
        ]);
        $joining_date = $request->joining_date;
      }
      $leaves = [];
     $standard_leaves = standard_leave::get();
     foreach($standard_leaves as $standard_leave){
      $leave_count = Self::count_leave($standard_leave['number_of_leaves'],$joining_date);
      array_push($leaves,$leave_count);
     }
     $leaves = implode(",",$leaves);
     if(!$joining_date == null){
      employee_leave::create([
        "user_id"=>$id,
        "leaves_available" => $leaves
      ]);
     }
      $employee = User::where('id',$id)->update([
        "status"=>$status,
        "user_type" => $request->user_type,
        "joining_date"=>$joining_date
      ]);
      return redirect()->back()->with('success','Updated Successfully !!!');
    }
    function logout(){
        Session::flush();
       return redirect('/login');
      }
      function count_leave($leave,$joining_date){
        // $remaining_day = 30 - date('d');
        // $remaining_month = 12 - date('m');
        $joining_day = date('d', strtotime($joining_date));
        $joining_month = date('m', strtotime($joining_date));
        $remaining_day = 31 - $joining_day;
        $remaining_month = 12 - $joining_month;
        if($remaining_day >= 15){
          $remaining_month = 13 - $joining_month;    
        }
        $month = 12;
        $current_leave = $leave/$month * $remaining_month;
        return round($current_leave);  
    }
function date(){
  // return date('Y-m-d');
 return Self::count_leave(12,'2023-10-03');
}
      
    
}

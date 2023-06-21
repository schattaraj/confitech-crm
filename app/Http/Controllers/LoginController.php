<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $req){
        $email = User::select('email')->where('email',$req['email'])->get();
        if(!$email->isEmpty()){
         $user_type = User::select('name','email','password','user_type')->where('email',$req['email'])->first();
        //  dd($req->password);
          if (Hash::check($req->password, $user_type->password)) {              
            $name = $user_type['name'];
            $user = $user_type['email'];
            if($user_type['user_type'] == "Admin"){
                $req->session()->put('admin-user',$user);
                return redirect('/admin')->with('name',$name);
            }
            else{
                $req->session()->put('user',$user);
                return redirect('/schedule-tour')->with('name',$name);
            }              
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
}

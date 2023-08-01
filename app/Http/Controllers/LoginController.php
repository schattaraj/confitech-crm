<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\app_user;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index(Request $req){
        $email = user::select('email')->where('email',$req['email'])->get();
        if(!$email->isEmpty()){
         $user_type = user::where('email',$req['email'])->first();
          if (Hash::check($req->password, $user_type->password)) {              
            $name = $user_type['name'];
            $user = $user_type['email'];
            $req->session()->put('admin-user',$user);
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
            return redirect('/adminLogin')->with('error',$error);
          }         
        }
        else{
            $error = "Username does not exist";
            return redirect('/adminLogin')->with('error',$error);
            // return view('frontend.pages.login',compact('error'));
        }
    }
    public function registration(Request $req){
      $req ->validate([
        'name' => 'required',
        'email' => 'required | email | unique:users',
        'password' => 'required'
      ]);
      
      $data['name'] = $req -> name;
      $data['email'] = $req -> email;
      $data['user_type'] = 'User';
      $data['password'] = Hash::make($req -> password);
      $user = User::create($data);
      if(!$user){
        $error = "User not created";
        return redirect('/register')->with('error',$error);
      }
      $success = "User created. Now login to your MFC account";
        return redirect('/login')->with('success',$success);
    }
    function logout(){
      Session::flush();
     return redirect('/adminLogin');
    }
}

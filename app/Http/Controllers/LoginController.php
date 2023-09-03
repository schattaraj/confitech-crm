<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;


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
    function logout(){
        Session::flush();
       return redirect('/login');
      }
}

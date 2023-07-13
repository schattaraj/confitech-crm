<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Cookie;

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
                $req->session()->put('user_name',$name);
                return redirect('/admin');
                // if(Cookie::get('route-name')){
                //   return redirect(Cookie::get('route-name'));
                // }
                // else{
                //   return redirect()->back()->with('name',$name);
                // }               
                
            }
            else{
                $req->session()->put('user',$user);
                $req->session()->put('user_name',$name);
                if(Cookie::get('route-name')){
                  return redirect(Cookie::get('route-name'));
                }
                else{
                  return redirect()->back()->with('name',$name);
                }
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
     return redirect()->back();
    }
}

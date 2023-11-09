<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee_leave;
use Session;
use App\Models\User;

class PageController extends Controller
{
    function index() {
        $session =  Session::get('user');
        $userData = User::where('email',$session)->first();
        $employee_leave = employee_leave::where('user_id',$userData['id'])->first();
        return view('user.admin',compact('employee_leave'));
    
    }
}

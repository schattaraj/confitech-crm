<?php

// namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Mail;

class CustomMailController extends Controller
{
    public function index(){
        // $all = $request->all();
          Mail::send('emails.terraceInquiry', array(
            'name' => 'subrata',
            "email"=>'schattaraj200@gmail.com',
            "phone"=>'9412345678',
            "message"=>'hello' 
        ), function($message) use ($request){
            $message->from('subhankar@confitechsol.com','MFC');
            $message->to($request->email, 'User')->subject('Your Tour Details');
            $message->cc('geetimoy@confitechsol.com');
        });
            // Inquiry::create($input);
            return $success = "Thanks for the Inquiry, we will contact you soon";
            // return redirect('/inquireNow')->with('success',$success);
       
    return "hiii";
    }
}


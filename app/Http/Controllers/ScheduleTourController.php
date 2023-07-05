<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\schedule_tour;
use App\Models\room_info;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Session;

class ScheduleTourController extends Controller
{
    public function index(){
        // if(Session::get('admin-user') || Session::get('user')){
        //    return view('schedule-tour');
        // }
        // else{
            return view('schedule-tour');
        // }
    }

    // public function chooseRoom(){
    //     return view('choose-room');
    // }

    // public function checkout(){
    //     return view('checkout');
    // }

    public function checkSchedule(Request $request){
     
        $this->validate($request,[
            'date'=>'required',
            'time_from'=>'required|date_format:H:i',
            'time_until'=>'required|date_format:H:i|after:time_from',
            'exampleRadios'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'space_type'=>'required',
            'space_type.*'=>'required',
            'message'=>'required'
        ]);
       $allData = $request;
        if(Session::get('admin-user')){
            $session_id = Session::get('admin-user');
          }
          elseif(Session::get('user')){
            $session_id = Session::get('user');
          }
          else{
            return redirect('/login');
        }
        $user = User::where('email',$session_id)->first('id');
        // return count($request->space_type);
        $schedule_tours = schedule_tour::where('space_type','virtual office')->orWhere('space_type','terrace')->where('meeting_date',$request->date)->get();
        if(count($schedule_tours) === 0){
         $rooms = room_info::get();
         return view('choose-room',compact('allData','rooms'));
        }
        else{
            foreach($schedule_tours as $schedule_tour){
            if($schedule_tour->time_from > $request->time_from){
                if($schedule_tour->time_until < $request->time_from){
                    // return "Success".$request->time_from."-".$request->time_until;
                    $rooms = room_info::where('room_type',$schedule_tour->space_type)->get();
                    return view('choose-room',compact('allData','rooms'));
                }
                else{
                    // return "Not available".$request->time_from."-".$request->time_until;
                    return redirect()->back()->with('error','Room Not available !!!');
                }
            }
            else{
                if($schedule_tour->time_until > $request->time_until || $schedule_tour->time_until > $request->time_from){
                    return redirect()->back()->with('error','Room Not available !!!');
                }
                else{
                    // return "Success".$request->time_from."-".$request->time_until;
                    $rooms = room_info::where('room_type',$schedule_tour->space_type)->get();
                    return view('choose-room',compact('allData','rooms'));
                }
            }
            }            
        }
        return view('choose-room',compact('allData'));
    }
    public function addSchedule(Request $request){

        // if(Session::get('admin-user')){
        //    $session_id = Session::get('admin-user');
        //  }
        //  elseif(Session::get('user')){
        //    $session_id = Session::get('user');
        //  }
        //  else{
        //      return redirect('/login');
        //  }
        $this->validate($request,[
            'date'=>'required',
            'time_from'=>'required|date_format:H:i',
            'time_until'=>'required|date_format:H:i|after:time_from',
            'exampleRadios'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'space_type'=>'required',
            'space_type.*'=>'required',
            'message'=>'required'
        ]);
        // $user = User::where('email',$session_id)->first('id');
      
        // $room_info = room_info::where('room_id',$all['room_id'])->first();
        schedule_tour::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "space_type"=>json_encode($request->space_type),
            "user_id"=>"null",
            "meeting_date" => $request->date,
            "time_from" => $request->time_from,
            "time_until" => $request->time_until,
            "message" => $request->message
        ]);
        
        return redirect('/thank-you');
    }
    public function scheduleTourSubmit(Request $request){

    }

    public function thankYou(){
        return view('thank-you');
    }
}

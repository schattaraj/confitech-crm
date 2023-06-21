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
        if(Session::get('admin-user') || Session::get('user')){
           return view('schedule-tour');
        }
        else{
            return view('login');
        }
    }

    public function chooseRoom(){
        return view('choose-room');
    }

    public function checkout(){
        return view('checkout');
    }

    public function checkSchedule(Request $request){
        $this->validate($request,[
            'meeting_room'=>'required',
            'date'=>'required',
            'time_from'=>'required|date_format:H:i',
            'time_until'=>'required|date_format:H:i|after:time_from',
            'noOfPeople'=>'required|integer'
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
        
        $schedule_tours = schedule_tour::where('room_id',$request->meeting_room)->where('meeting_date',$request->date)->get();
        if(count($schedule_tours) === 0){
         $rooms = room_info::get();
         return view('choose-room',compact('allData','rooms'));
        }
        else{
            foreach($schedule_tours as $schedule_tour){
            if($schedule_tour->time_from > $request->time_from){
                if($schedule_tour->time_until < $request->time_from){
                    // return "Success".$request->time_from."-".$request->time_until;
                    $rooms = room_info::where('room_id',$schedule_tour->room_id)->get();
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
                    $rooms = room_info::where('room_id',$schedule_tour->room_id)->get();
                    return view('choose-room',compact('allData','rooms'));
                }
            }
            }            
        }
        return view('choose-room',compact('allData'));
    }
    public function addSchedule(Request $request){

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
        $all = $request->all();
        $room_info = room_info::where('room_id',$all['room_id'])->first();
        schedule_tour::create([
            "user_id"=>$user['id'],
            "meeting_type" => $room_info['room_type'],
            "meeting_date" => $all['date'],
            "time_from" => $all['time_from'],
            "time_until" => $all['time_until'],
            "no_of_people" => $all['noOfPeople'],
            "room_id" => $room_info['room_id'],
        ]);
        
        return redirect('/thank-you');
    }
    public function scheduleTourSubmit(Request $request){

    }

    public function thankYou(){
        return view('thank-you');
    }
}

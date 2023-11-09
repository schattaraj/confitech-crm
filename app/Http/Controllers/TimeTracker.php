<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project;
use App\Models\time_tracker;
use App\Models\User;
use Session;

class TimeTracker extends Controller
{
   function index(){
    $projects = project::get();
    $session =  Session::get('user');
      if($session == null){
         $session = Session::get('admin-user');
      }
      $userData = User::where('email',$session)->first();
    $time_trackers = time_tracker::where('user_id',$userData['id'])->join('projects','projects.id','=','time_trackers.project_id')->get();
    return view('backend.time-tracker.index',compact('projects','time_trackers'));
   }
   function saveTimeTracker(Request $request){
      $data = $request->data;
      $type = $request->type;
      // return response()->json([
      //    'status'=>200,
      //    "message"=> $type,
      //  ]);   
      $arr = [];
      $project_id=null;
      $job_name=null;
      $working_date=null;
      $start_time=null;
      $end_time=null;
      $job_description=null;
      $billable_status = null;
      $session =  Session::get('user');
      if($session == null){
         $session = Session::get('admin-user');
      }
      $userData = User::where('email',$session)->first();
     if($type == "daily"){
      foreach($data as $item){
         // array_push($arr,["project_id"=>$item['project_id']]);
         $project_id = $item['project_id'];
         $job_name = $item['job_name'];
         $working_date = $item['date'];
         $job_description = $item['description'];
         $start_time = $item['start_time'];
         $end_time = $item['end_time'];
         $billable_status = $item['billable_status'];
         time_tracker::create([
            'user_id'=>$userData['id'],
            "project_id"=>$project_id,
            "job_name"=>$job_name,
            "working_date"=>$working_date,
            "job_description"=>$job_description,
            "start_time"=>$start_time,
            "end_time"=>$end_time,
            "billable_status"=>$billable_status,
         ]);     
      }
     }
     if($type == "weekly"){
       foreach($data as $item){
         foreach($item as $innerItem){
         if($innerItem['date']){
         $project_id = $innerItem['project_id'];
         $job_name = $innerItem['job_name'];
         $working_date = $innerItem['date'];
         $job_description = $innerItem['description'];
         $start_time = $innerItem['start_time'];
         $end_time = $innerItem['end_time'];
         $billable_status = $innerItem['billable_status'];
         time_tracker::create([
            'user_id'=>$userData['id'],
            "project_id"=>$project_id,
            "job_name"=>$job_name,
            "working_date"=>$working_date,
            "job_description"=>$job_description,
            "start_time"=>$start_time,
            "end_time"=>$end_time,
            "billable_status"=>$billable_status,
         ]);     
            }
         }
       }
     }
         return response()->json([
            'status'=>200,
            "message"=> "Added successfully",
          ]);   
     
   }
}

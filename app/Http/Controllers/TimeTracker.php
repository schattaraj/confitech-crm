<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project;
use App\Models\time_tracker;
use App\Models\User;
use Session;
use Carbon\CarbonPeriod;

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
    $period = CarbonPeriod::create(date('Y-m-d',strtotime('last sunday')), date('Y-m-d',strtotime('last sunday + 6 days')));
    $html = "<th>Sl no.</th><th>Project Name</th><th>Job Name</th><th>Description</th><th>Billable Status</th>";
    $weeklyArr = [];
    foreach ($period as $date) {
      // echo $date->format('Y-d-m');
   //    array_push($weeklyArr,  array(
   //       "project_id"=>"",
   //      "job_name"=>"",
   //      "description"=>"",
   //      "billable_status"=>"",
   //      "date"=>$date->format('Y-d-m'),
   //      "start_time"=>"",
   //      "end_time"=>""
   //  ));
   array_push($weeklyArr,$date->format('Y-d-m'));
     $html = $html."<th>".$date->format('M')." ".$date->format('d')."</th>";
  }
 $weeklyArr;
  // Convert the period to an array of dates
//  return date('Y-m-d',strtotime('last sunday'));
 $dates = $period->toArray();
//  return $dates[6];
    return view('backend.time-tracker.index',compact('projects','time_trackers','dates','html','weeklyArr'));
   }
   function weeklyFormat(){
      // $tableHeader = "<tr><th>Sl no.</th><th>Project Name</th><th>Job Name</th><th>Description</th><th>Billable Status</th><th>'+(testDays<sunDate ? 1 : month[from_date.getMonth()]+" "+sunDate)+'</th>"
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
         if($innerItem['date'] && $innerItem['start_time']){
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client;
use App\Models\project;

class ProjectController extends Controller
{
    function index(){
        $projects = project::get();
        return view('backend.project.index',compact('projects'));
    }
    function addProject(){
        $clients = client::get();
        return view('backend.project.add-project',compact('clients'));
    }
    function saveProject(Request $req){
        $req->validate([
            'project_name'=>'required',
            'client'=>'required',
            'commercial'=>'required',
            'resources'=>'required',
            'description'=>'required',
            'document'=>'required|mimes:png,jpg,jpeg,pdf',
        ]);
        $document = "";
        if($req->hasFile('document')){
            $file = $req->file('document');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $destinationPath ='/files';
            $file->move(public_path() . $destinationPath, $filename);
            $document = url('/public').$destinationPath."/".$filename;
        }
        project::create([
            'project_name'=>$req->project_name,
            'client_id'=>$req->client,
            'commercial'=>$req->commercial,
            'resources'=>$req->resources,
            'description'=>$req->description,
            'document'=>$document,
        ]);
        return redirect()->back()->with('success',"Project added succesfully !!!");
    }
    function editProject($id){
        $project = project::where('id',$id)->first();
        $clients = client::get();
        return view('backend.project.edit-project',compact('project','clients'));
    }
    function updateProject(Request $req){
        $req->validate([
            'project_id'=>'required',
            'project_name'=>'required',
            'client'=>'required',
            'commercial'=>'required',
            'resources'=>'required',
            'description'=>'required',
        ]);
        $project = project::where('id',$req->project_id)->first();
       $document = $project['document'];
        if($req->hasFile('document')){
            $file = $req->file('document');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $destinationPath ='/files';
            $file->move(public_path() . $destinationPath, $filename);
            $document = url('/public').$destinationPath."/".$filename;
        }
        project::where('id',$req->project_id)->update([
            'project_name'=>$req->project_name,
            'client_id'=>$req->client,
            'commercial'=>$req->commercial,
            'resources'=>$req->resources,
            'description'=>$req->description,
            'document'=>$document,
        ]);
        return redirect()->back()->with('success',"Project updated succesfully !!!");
    }
}

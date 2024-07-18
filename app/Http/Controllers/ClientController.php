<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client;
use App\Models\state_code;

class ClientController extends Controller
{
    function index(){
        $clients = client::orderBy('id','desc')->get();
      return  view('backend.clients.index',compact('clients'));
    }

    function addClient(){
        return  view('backend.clients.add-client');
    }
    
    function saveClient(Request $req){
        $req ->validate([
            'client_name' => 'required',
            'poc_name' => 'required',
            'poc_email' => 'required',
            'client_address1' => 'required',
            // 'client_address2' => 'required',
            // 'client_address3' => 'required',
            'client_state' => 'required',
            'client_country' => 'required',
            // 'gstin' => 'required|min:15|max:15',
            // 'state_code' => 'required',
            // 'description' => 'required',
        ]);
        $client_name = $req->client_name;
        $poc_name = $req->poc_name;
        $poc_email = $req->poc_name;
        if($req->gstin){
            $req ->validate([
                "gstin" => 'required|unique:clients'
            ]);
        }
        client::create([
            'client_name' => $client_name,
            'poc_name' => $poc_name,
            'poc_email' => $poc_email,
            'client_address1' => $req->client_address1,
            'client_address2' => $req->client_address2,
            'client_address3' => $req->client_address3,
            'client_state' => $req->client_state,
            'client_country' => $req->client_country,
            'gstin' => $req->gstin,
            'state_code' => $req->state_code,
            'description' => $req->description,
        ]);
        return redirect()->back()->with('success',"Client added succesfully !!!");
    }
    function stateCode(Request $req){
        $state_code = state_code::where('state_code',$req->state_code)->first();
        return response()->json([
            'status'=>200,
            "data"=> $state_code,
          ]);   
    }
    function editClient($id){
        $client = client::where('id',$id)->first();
        return view('backend.clients.edit-client',compact('client'));
    }
    function updateClient(Request $req){
        $req ->validate([
            'client_id' => 'required',
            'client_name' => 'required',
            'poc_name' => 'required',
            'poc_email' => 'required',
            'client_address1' => 'required',
            // 'client_address2' => 'required',
            // 'client_address3' => 'required',
            'client_state' => 'required',
            'client_country' => 'required',
            // 'gstin' => 'required|min:15|max:15',
            // 'state_code' => 'required',
            // 'description' => 'required',
        ]);
        $client_id = $req->client_id;
        $client_name = $req->client_name;
        $poc_name = $req->poc_name;
        $poc_email = $req->poc_name;
        client::where('id',$client_id)->update([
            'client_name' => $client_name,
            'poc_name' => $poc_name,
            'poc_email' => $poc_email,
            'client_address1' => $req->client_address1,
            'client_address2' => $req->client_address2,
            'client_address3' => $req->client_address3,
            'client_state' => $req->client_state,
            'client_country' => $req->client_country,
            'gstin' => $req->gstin,
            'state_code' => $req->state_code,
            'description' => $req->description,
        ]);
        return redirect()->back()->with('success',"Updated succesfully !!!");
    }
    function clientStatus(Request $req){
        $req->validate([
            "client_id"=>'required'
        ]);
        $client_id = $req->client_id;
      if($req->status == "on"){
        client::where('id',$client_id)->update([
            'status' => 'Active',
        ]);
        return redirect()->back()->with('success',"Updated succesfully !!!");
      }
      else{
        client::where('id',$client_id)->update([
            'status' => 'Inactive',
        ]);
        return redirect()->back()->with('success',"Updated succesfully !!!");
      }
    }
}

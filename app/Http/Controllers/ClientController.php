<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client_poc;
use App\Models\client;
use App\Models\client_gstin;
use App\Models\state_code;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    function index(){
        $clients = client_poc::orderBy('id','desc')->get();
      return  view('backend.clients.index',compact('clients'));
    }

    function addClient(){
        return  view('backend.clients.add-client');
    }
    
    function saveClient(Request $req){
        $req ->validate([
            'client_name' => 'required',
            'poc_name' => 'required|array',
            'poc_email' => 'required|array',
            'poc_number' => 'required|array',
            'client_address1' => 'required',
            // 'client_address2' => 'required',
            // 'client_address3' => 'required',
            'client_state' => 'required',
            'client_country' => 'required',
            // 'gstin' => 'min:15|max:15',
            // 'state_code' => 'required',
            // 'description' => 'required',
        ]);
        $client_name = $req->client_name;
        $poc_names = $req->validate(['poc_name' => 'required|array',
            'poc_name.*.name' => 'required|string',]);
        $poc_emails = $req->validate([ 'poc_email'=> 'required|array','poc_email.*.email' => 'required|email',]);
        $poc_numbers = $req->validate([ 'poc_number'=> 'required|array','poc_number.*.number' => 'required|string',]);
        // $keyValuePairs = [];
        // foreach ($poc_name as $index => $name) {
        //     $keyValuePairs["key" . ($index)] = $name;
        // }

        // $json_data = json_encode($keyValuePairs);
        $poc_name = json_encode($req->poc_name);
        $poc_email = json_encode($req->poc_email);
        $poc_number = json_encode($req->poc_number);
        $lastClient = client_poc::latest('id')->first();
        $nextNumber = $lastClient ? $lastClient->id + 1 : 1;
        $client_autoid= $this->generateUniqueId($req->client_name, $nextNumber);
        if($req->gstin){
            $req ->validate([
                "gstin" => 'required|unique:clients'
            ]);
        }
        client_poc::create([
            'client_name' => $client_name,
            'client_autoid'=> $client_autoid,
            // 'poc_name' => $json_data,
            'poc_name' => $poc_name,
            'poc_email' => $poc_email,
            'poc_number' => $poc_number,

            
        ]);
        client_gstin::create([
            
            'client_autoid'=> $client_autoid,
            'client_address1' => $req->client_address1,
            'client_address2' => $req->client_address2,
            'client_address3' => $req->client_address3,
            'client_state' => $req->client_state,
            'client_country' => $req->client_country,
            'gstin' => $req->gstin,
            'state_code' => $req->state_code,
            
        ]);
        return redirect()->back()->with('success',"Client added succesfully !!!");
    }
    private function generateUniqueId($client_name, $number)
    {
        

        $namePart = strtoupper(Str::slug($client_name));
        // Ensure the client ID is unique
        return "{$namePart}-{$number}";

        return $uniqueId;
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
        client_poc::where('id',$client_id)->update([
            'client_name' => $client_name,
            'poc_name' => $poc_name,
            'poc_email' => $poc_email,
            
        ]);
        client_poc::where('id',$client_id)->update([
            
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

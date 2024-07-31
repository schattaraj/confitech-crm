<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\client_poc;
use App\Models\client;
use App\Models\client_gstin;
use App\Models\state_code;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    function index(){
        $clients = DB::table('client_poc')
            ->join('client_gstin', 'client_poc.client_autoid', '=', 'client_gstin.client_autoid')
            ->orderBy('client_poc.id', 'desc')
            ->get();
        // $clients = client_poc::with(['client_gstin'])-> orderBy('id','desc')->get();
        // dd($clients);
        $allPocNames = [];

        // Iterate over each client and decode 'poc_name' if it's JSON
        foreach ($clients as $client) {
            $client->poc_name = json_decode($client->poc_name, true);
            $pocNames = json_decode($client->poc_name, true);
            if (is_array($pocNames)) {
                $namesList = array_column($pocNames, 'name');
                $allPocNames = array_merge($allPocNames, $namesList);
            }
        }
    
        // Create a comma-separated string of all names
        $namesString = implode(', ', array_unique($allPocNames));
// dd($namesString);
      return  view('backend.clients.index',compact('clients', 'namesString'));
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
            'client_address1' => 'required|array',
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
        $client_address = $req->validate([ 'client_address1'=> 'required|array','client_address1.*.address' => 'required|string',]);
        $poc_name = json_encode($req->poc_name);
        $poc_email = json_encode($req->poc_email);
        $poc_number = json_encode($req->poc_number);
        $client_address1 = json_encode($req->client_address1);
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
            // 'client_address2' => $req->client_address2,
            // 'client_address3' => $req->client_address3,
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
            'poc_name' => 'required|array',
            'poc_email' => 'required|array',
            'poc_number' => 'required|array',
            'client_address1' => 'required|array',
            // 'client_address2' => 'required',
            // 'client_address3' => 'required',
            'client_state' => 'required',
            'client_country' => 'required',
            // 'gstin' => 'required|min:15|max:15',
            // 'state_code' => 'required',
            // 'description' => 'required',
        ]);

        $client_id = $req->client_id;
        $poc_names = $req->validate(['poc_name' => 'required|array','poc_name.*.name' => 'required|string',]);
        $poc_emails = $req->validate([ 'poc_email'=> 'required|array','poc_email.*.email' => 'required|email',]);
        $poc_numbers = $req->validate([ 'poc_number'=> 'required|array','poc_number.*.number' => 'required|string',]);
        $client_address = $req->validate([ 'client_address1'=> 'required|array','client_address1.*.address' => 'required|string',]);
        $poc_name = json_encode($req->poc_name);
        $poc_email = json_encode($req->poc_email);
        $poc_number = json_encode($req->poc_number);
        $client_address1 = json_encode($req->client_address1);
        client_poc::where('id',$client_id)->update([
            'client_name' => $client_name,
            'poc_name' => $poc_name,
            'poc_email' => $poc_email,
            
        ]);
        client_gstin::where('id',$client_id)->update([
            
            'client_address1' => $req->client_address1,
            // 'client_address2' => $req->client_address2,
            // 'client_address3' => $req->client_address3,
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Carbon;

class RegisterController extends Controller
{
    public function registration(Request $req){
      $dt = new Carbon\Carbon();
$before = $dt->subYears(18)->format('Y-m-d');

        $req ->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'dob' => 'required|date|before:'.$before,
            'mobile_number' => 'required | integer|digits:10|different:emergency_contact',
            'aadhaar_card' => 'required|integer|digits:12',
            'aadhaar_card_photo' => 'required',
            'aadhaar_card_photo.*' => 'image|mimes:jpeg,png,jpg,pdf|max:4096',
            'pan_number' => 'required|max:10|min:10',
            'pan_photo' => 'required|mimes:jpeg,png,jpg,pdf|max:4096',
            'photo' => 'required|mimes:jpeg,png|max:4096',
            'permanent_address' => 'required',
            'residential_address' => 'required',
            'blood_group' => 'required',
            'emergency_contact'=>'required |integer|digits:10|different:mobile_number',
            'emergency_contact_person'=>'required',
            'emergency_contact_person_relationship'=>'required',
            'marital_status' => 'required',
            'gender' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password'
          ]);
          $aadhaar_photos = [];
          if($req->hasFile('aadhaar_card_photo')){
             $allowedfileExtension=['pdf','jpg','png','docx'];
             $files = $req->file('aadhaar_card_photo');
             foreach($files as $file){
             $filename = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $destinationPath ='/files';
             $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                  $file->move(public_path() . $destinationPath, $filename);
                  $aadhaar_filename = url('/public').$destinationPath."/".$filename;
                  array_push($aadhaar_photos,$aadhaar_filename);
                }
              }
          }
          // return $aadhaar_photos;
          if ($req->pan_photo) {
            $destinationPath ='/files';
            $extension = $req->file('pan_photo')->getClientOriginalExtension();
            $filename_pan = rand(11111, 99999) . '.' . $extension;
           $req->file('pan_photo')->move(public_path() . $destinationPath, $filename_pan);
        }
         $pan_photo = url('/public').$destinationPath."/".$filename_pan;
          if ($req->photo) {
            $destinationPath ='/files';
            $extension = $req->file('photo')->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
           $req->file('photo')->move(public_path() . $destinationPath, $filename);
        }
        $photo_src = url('/public').$destinationPath."/".$filename;
          $last = User::latest('id')->first();
          $num_padded = sprintf("%04d", $last['id']);
          $num = intval($num_padded)+1;
          $new_id = sprintf("%04d", $num);
          $new_id;
          $data['name'] = $req -> name;
          $data['email'] = $req -> email;
          $data['dob'] = $req -> dob;
          $data['mobile_number'] = $req -> mobile_number;
          $data['aadhaar_card'] = $req -> aadhaar_card;
          $data['aadhaar_card_photo'] = json_encode($aadhaar_photos);
          $data['pan_number'] = $req->pan_number;
          $data['pan_photo'] = $pan_photo;
          $data['photo'] = $photo_src;
          $data['permanent_address'] = $req -> permanent_address;
          $data['residential_address'] = $req -> residential_address;
          $data['blood_group'] = $req -> blood_group;
          $data['emergency_contact'] = $req -> emergency_contact;
          $data['emergency_contact_person'] = $req->emergency_contact_person;
          $data['emergency_contact_person_relationship'] = $req -> emergency_contact_person_relationship;
          $data['marital_status'] = $req -> marital_status;
          $data['gender'] = $req -> gender;
          $data['user_type'] = 'User';
          $data['password'] = Hash::make($req -> password);
          $data['emp_id'] = $new_id;
          $data['remember_token'] = "0";
          // $data['password'] = ;
          $user = User::create($data); 
          if(!$user){
            $error = "User not created";
            return redirect('/register')->with('error',$error);
          }
          $success = "Registration successfully Completed. Wait for admin's confirmation";
            return redirect('/login')->with('success',$success);
        }
}

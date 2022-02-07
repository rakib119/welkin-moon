<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class InformationController extends Controller
{
   public function create(){
     return view('dashboard.information.yourinfo');
   }
   public function your_info(Request $request){

     $request->validate([
        'first_name'=> 'required',
        'Last_name'=> 'required|max:255',
        'email'=> 'required|max:255',
        'phone_number'=> 'required|max:255',
        'date_of_birth'=> 'required|max:255',
        'present_address'=> 'required|max:255',
        'permanent_address'=> 'required|max:255',
        'nid_or_dob_number'=> 'required|max:255',
        'marital_status'=> 'required|max:255',
        'zip_code'=> 'required|max:255',
        'occupation'=> 'required|max:255',
        'religion'=> 'required|max:255',
        'police_station'=> 'required|max:255',
        'number_of_duty_officer'=> 'required|max:255',
        'gender'=> 'required|max:255',
        'fire_service_name'=> 'nullable|max:255',
        'fire_service_number'=> 'nullable|max:255',
        'Upazila_Hospital_Name'=> 'nullable|max:255',
        'Upazila_Hospital_number'=> 'nullable|max:255',
        'picture'=> 'required|max:255|mimes:jpg,png',
        'NID_Card_Or_DOB_Attested_copy'=> 'required|max:255|mimes:jpg,png',
        'nid_or_dob_font'=> 'required|max:255|mimes:jpg,png',
        'nid_back'=> 'required|max:255|mimes:jpg,png',
        'education_certificate'=> 'required|max:255|mimes:jpg,png',
        'statement'=> 'required|max:255|mimes:jpg,png',
    ]);


       PersonalInfo:: insert([
        'first_name'=> $request->first_name,
        'Last_name'=> $request->Last_name,
        'email'=> $request->email,
        'phone_number'=> $request->phone_number,
        'date_of_birth'=> $request->date_of_birth,
        'present_address'=> $request->present_address,
        'permanent_address'=> $request->permanent_address,
        'nid_or_dob_number'=> $request->nid_or_dob_number,
        'marital_status'=> $request->marital_status,
        'zip_code'=> $request->zip_code,
        'occupation'=> $request->occupation,
        'religion'=> $request->religion,
        'police_station'=> $request->police_station,
        'number_of_duty_officer'=> $request->number_of_duty_officer,
        'gender'=> $request->gender,
        'fire_service_name'=> $request->fire_service_name,
        'fire_service_number'=> $request->fire_service_number,
        'Upazila_Hospital_Name'=> $request->Upazila_Hospital_Name,
        'Upazila_Hospital_number'=> $request->Upazila_Hospital_number,
        'picture'=> "",
        'NID_Card_Or_DOB_Attested_copy'=> "",
        'nid_or_dob_font'=> "",
        'nid_back'=> "",
        'education_certificate'=> "",
        'statement'=> "",
    ]);
   }
   public function father_info(Request $request){


   }
   public function mother_info(Request $request){


   }
}

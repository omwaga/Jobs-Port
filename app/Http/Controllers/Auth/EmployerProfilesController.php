<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Mail\EmployerWelcomeMail;
use Illuminate\Support\Facades\Mail;

use App\Employer;

class EmployerProfilesController extends Controller
{
  public function createcompany(Request $request){
    $attributes = request()->validate([
      'firstname'=>'required',
      'lastname'=>'required',
      'personal_email'=>'required',
      'postal_code'=>'required',
      'company_phone_number'=>'required',
      'job_title'=>'required',
      'company_address'=>'nullable',
      'company_name'=>'required',
      'company_location'=>'nullable',
      'company_website'=>'nullable',
      'company_industry'=>'nullable',
      'company_email'=>'required',
      'company_size'=>'nullable',
      'employer_type'=>'required',
      'personal_phone_number'=>'required|min:9',
      'country'=>'nullable',
      'company_address'=>'required',
      'logo'=>'nullable',
      'username'=>'required',
    ]);

    $password = request()->validate([
      'password'=>'required',
    ]);

    if ($request->hasFile('logo')) {
      $attributes['logo'] = $request->logo->getClientOriginalName();
      $request->logo->storeAs('public/logos', $attributes['logo']);
    }
    else{
      $attributes['logo'] ='default-logo.png';
    }

    $data=array(
      'email'=>$request->username,
      'firstname'=>$request->firstname,
      'company_name'=>$request->companyname,
      'company_industry'=>$request->cindustry,
      'company_address'=>$request->caddress,
      'company_email'=>$request->companyemail,
      'lastname'=>$request->contactperson,
      'company_phone_number'=>$request->telephone,
    );

    Employer::create($attributes + ['password' => Hash::make($password['password'])]);

    Mail::to($request->username)->send(new EmployerWelcomeMail($data));

    return redirect(route('foremployer'))->with('message','Company profile created successfully. Login!');
  }

}

<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
    'company_address'=>'required',
    'company_name'=>'required',
    'company_location'=>'required',
    'company_website'=>'required',
    'company_industry'=>'required',
    'company_email'=>'required',
    'company_size'=>'required',
    'employer_type'=>'required',
    'personal_phone_number'=>'required|max:15|min:10',
    'country'=>'required',
    'company_address'=>'required',
    'logo'=>'required',
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
    'email'=>$request->email,
    'firstname'=>$request->firstname,
    'company_name'=>$request->companyname,
    'company_industry'=>$request->cindustry,
    'company_address'=>$request->caddress,
    'company_email'=>$request->companyemail,
    'lastname'=>$request->contactperson,
    'company_phone_number'=>$request->telephone,
);

Employer::create($attributes + ['password' => bcrypt($request->input('password'))]);
  // Mail::send('email.companyemail',$data,function ($message) use ($data){
  //   $message->to($data['email']);
  //   $message->from('info@thenetworkedpros.com');
  //   $message->subject('COMPANY ACCOUNT CREATION');
  // });
  return redirect('/employer')->with('message','Profile Created Successfully. Login!');
}

}

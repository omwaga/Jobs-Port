<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Mail\EmployerWelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Employer;

class EmployerProfilesController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/employers/finish-registration';

  public function createcompany(Request $request){
    $attributes = request()->validate([
      'company_phone_number'=>'required',
      'company_address'=>'nullable',
      'company_name'=>'required',
      'state'=>'nullable',
      'company_website'=>'nullable',
      'company_industry'=>'nullable',
      'company_email'=>'required',
      'company_size'=>'nullable',
      'employer_type'=>'required',
      'country'=>'nullable',
      'company_address'=>'required',
      'logo'=>'nullable',
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
      'email'=>$request->company_email,
      'firstname'=>$request->company_name,
      'company_name'=>$request->companyname,
      'company_industry'=>$request->cindustry,
      'company_address'=>$request->caddress,
      'company_email'=>$request->companyemail,
      'lastname'=>$request->company_name,
      'company_phone_number'=>$request->telephone,
    );

    $user = Employer::create($attributes + ['password' => Hash::make($password['password']), 'username' => $request->company_email]);

    Mail::to($request->company_email)->send(new EmployerWelcomeMail($data));

    // return redirect(route('foremployer'))->with('message','Company profile created successfully. Login!');

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectTo);
  }

  /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('employer');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }

}

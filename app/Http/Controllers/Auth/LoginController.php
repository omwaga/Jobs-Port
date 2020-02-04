<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Town;
use App\Industry;
use Mail;
use App\User;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     * 
     */
    public function redirectTo(){
        if (auth()->user()->user_type == 'Admin') {
            return '/admin-dashboard';
        }
        return '/jobseekeraccount';
// $finduser=Auth()->user()->userlevel;
// switch($finduser){
// case '0':
// return '/jobseekeraccount';
// break;
// case '1':
// return '/jobseekeraccount';
// break;
// }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function showLoginForm(){
        $towns=Town::orderBy('name','asc')->limit(7)->get();
        $industries=Industry::orderBy('name','asc')->limit(7)->get();
        return view('auth.login')->with('towns',$towns)
        ->with('industries',$industries);
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

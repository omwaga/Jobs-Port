<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use DB;
class ApplyjobController extends Controller
{
    public function __construct(){
        $this->middleware('guest:user',['except' => ['logout', 'getLogout']]);
    }
    public function login(Request $request){
        //validate form data
        $this->validate($request,[
            'login_email'=>'required|email',
            'login_password'=>'required|min:6',
        ]);


        $jobtitle = str_slug($request->jobtitle, '-');

         if (Auth::attempt(['email'=>$request->login_email,'password'=>$request->login_password],$request->remember)) {
            return redirect(url('/jobseeker/apply',[$request->id]));
         }

      return redirect()->back()->withInput($request->only('email','remember'))->with('error','wrong email address');
    }
        /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'train.login' ));
    }

}

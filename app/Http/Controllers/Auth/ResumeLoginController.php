<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Training_Center;
use DB;
class TrainingCenterLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:trainingc',['except' => ['logout', 'getLogout']]);
    }
    public function ShowLoginForm(){
        return view ('trainingcenter.login');
    }
    public function login(Request $request){
        //validate form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]
    );
 
    if (Auth::guard('trainingc')->attempt(['username'=>$request->email,'password'=>$request->password],$request->remember)) {
      if (Training_Center::where('approved', '=', 'Yes')->where('id',Auth::guard('trainingc')->user()->id)->exists()) {
                return redirect()->intended(route('ldashboard')); 
     }
     else if(Training_Center::where('approved', '=', 'No')->where('id',Auth::guard('trainingc')->user()->id)->exists()){
       return redirect()->intended(route('training.home'));  
     }
     
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
        Auth::guard('trainingc')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'train.login' ));
    }

}

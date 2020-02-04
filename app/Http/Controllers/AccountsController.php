<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AccountsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
    }
    public function updateuser(Request $request, $id){
        $this->validate($request,[
            
            'name'=>'required',
            'email'=>'required',
            ]);
            $user=User::find($id);
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->save();
            return redirect::back()->with('status','you have successfully changed your personal information');
        
    }
    public function updatepass(Request $request,$id){
            $this->validate($request,[
            'oldp' => 'required',
            'npassword' => 'required|string|min:8|confirmed',
     
        ]);
   $userr=User::find($id);
        if (Hash::check($request->oldp, auth()->user()->password)) { 
            $userr->password=Hash::make($request->input('npassword'));
            $userr->save();
         return redirect::back()->with('status','password changed successfully');
} else {
    return redirect::back()->with('error', 'Password does not match');
}
            
        
    }
}

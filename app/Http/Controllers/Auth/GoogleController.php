<?php

namespace App\Http\Controllers\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bio;
use App\User;
use App\Companies;
use App\Worker;
use App\Profiles;
use App\Jobposts;
use Mail;
use Auth;
class GoogleController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo= '/jobseekeraccount';
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
       $authuser= $this->findorcreateuser($user,'google');
        Auth::login($authuser,true);
        return redirect($this->redirectTo);
    }
    public function findorcreateuser($user){
$authuser=User::where('provider_id',$user->id)->first();
if($authuser){
return $authuser;
}
$userr= User::create([
    'name'=>$user->name,
    'email'=>$user->email,
    'provider'=>strtoupper('google'),
    'provider_id'=>$user->id,
]);
$data=array(
    'name'=>$user->name,
    'email'=>$user->email,

);
Mail::send('email.email',$data,function($message) use($data){
$message->to($data['email']);
$message->from('jamesnyanga@gmail.com');
$message->subject('The Networked Pros Account Confirmation');
});
return $userr;
    }
}

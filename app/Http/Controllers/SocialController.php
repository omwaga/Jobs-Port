<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Companies;
use App\Profiles;
use App\Jobposts;
use Mail;
use Auth;
class SocialController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo= '/jobseeker/dashboard';
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $authuser= $this->findorcreateuser($user,'facebook');
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
            'provider'=>strtoupper('facebook'),
            'provider_id'=>$user->id,
        ]);
        $data=array(
            'name'=>$user->name,
            'email'=>$user->email,

        );
        
        return $userr;
    }
}

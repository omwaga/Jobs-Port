<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\JobseekerDetail;

class JobseekerDetailsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
      $attributes = request()->validate([
          'name' => ['required', 'min:3'],
          'email' => 'required',
          'id_pass' => 'required',
          'phone' => 'required',
          'gender' => 'required',
          'links' => 'nullable',
          'religion' => 'required',
          'marital_status' => 'required',
          'dob' => 'required',
          'nationality' => 'required',
          'city' => 'required',
          'profile_picture' => 'nullable',
          'postal_address' => ['required', 'min:3'],
          'postal_code' => ['required', 'min:3']
          ]);


        if ($request->hasFile('profile_picture')) {
        $attributes['profile_picture'] = $request->profile_picture->getClientOriginalName();
        $request->profile_picture->storeAs('public/profiles', $attributes['profile_picture']);
      }
          
       JobseekerDetail::create($attributes + ['user_id' => auth()->user()->id]);
       
       return back();
    }
    
    public function update(Request $request)
    {
            JobseekerDetail::where('user_id', auth()->user()->id)
                     ->update(request(['name','email', 'phone', 'id_pass', 'dob',
                    'marital_status', 'religion', 'gender', 'nationality', 'city', 'postal_address', 'postal_code'
            ]));
       
       return back();
    }
}

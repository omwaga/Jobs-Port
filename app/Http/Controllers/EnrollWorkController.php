<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WorkProgramEnrollment;

class EnrollWorkController extends Controller
{
    public function register(Request $request)
    {
    	$attributes = request()->validate([
    		'full_name' => ['required', 'min:3'],
    		'country' => 'required',
    		'email' => 'required',
    		'phone_number' => 'required',
    		'career_planning' => 'required',
    		'job_preparation' => 'nullable',
    		'workplace_skills' => 'nullable',
    		'personal_development' => 'nullable',
    		'it_skills' => 'nullable',
    		'business_skills' => 'nullable',
    		'consultancy_skills' => 'nullable'
    	]);

    	WorkProgramEnrollment::create($attributes);

    	return back()->with('message', 'Your enrollment has been submitted successfully');

    }
}

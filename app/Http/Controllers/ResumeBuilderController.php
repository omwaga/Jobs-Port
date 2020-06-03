<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skills;

class ResumeBuilderController extends Controller
{
    public function skills()
    {
    $skills = Skills::where('user_id', '=', auth()->user()->id)->pluck('skillname');	
    }

    public function education(Request $request){
    	$attributes = $request->validate([
            'education_institution' => 'required|min:3',
            'education_qualification' => 'required|min:3',
            'education_date' => 'required|min:3',
            'education_city' => 'required|min:3',
            'education_date' => 'required|min:3',
        ]);

    	return ['message' => 'The submission was successful!'];
    }

    public function experience(Request $request){
    	$attributes = $request->validate([
            'experience_title' => 'required|min:3',
            'experience_date' => 'required|min:3',
            'employer' => 'required|min:3',
            'company_city' => 'required|min:3',
            'experience_description' => 'nullable|min:3'
        ]);

    	return ['message' => 'The submission was successful!'];
    }
}

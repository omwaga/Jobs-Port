<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WorkExperience;
use App\Education;
use App\Skills;

class ResumeBuilderController extends Controller
{
    //get experiences from the database
    public function experiences()
    {
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();

    return $experience;
    }

    //get the education information from  the database
    public function educations()
    {
    $educations = Education::where('user_id', '=', auth()->user()->id)->get();

    return $educations;
    }

    //get skills information from  the database
    public function skills()
    {
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();

    return $skills;
    }

//save education to the database
    public function education(Request $request){
    	$attributes = $request->validate([
            'education_institution' => 'required|min:3',
            'education_qualification' => 'required|min:3',
            'start_date' => 'nullable',
            'grad_date' => 'nullable',
            'level' => 'nullable',
            'score' => 'nullable',
        ]);

    	return ['message' => 'The submission was successful!'];
    }

//save experience to the database
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

//Save a skill to the database
    public function skill(Request $request){
        $attributes = $request->validate([
            'skill_name' => 'required|min:3',
            'expertise_level' => 'required|min:3'
        ]);

        return ['message' => 'The submission was successful!'];
    }
}

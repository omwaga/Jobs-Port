<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\TrainingApplication;

class TrainingApplicationController extends Controller
{
    public function store(Request $request, Training $training)
    {
        $attributes = $this->validate($request,[
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'min:3'],
            'phone_no' => ['required', 'min:3'],
            'institution' => ['required', 'min:3'],
            'availability' => ['required', 'min:3'],
            'trainings_id' => 'required'
            ]);
            
            TrainingApplication::create($attributes);
            
            return redirect('/trainingcourses')->with('status','Your application has been sent successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\jobcategories;

class TrainingSeminarsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application trainings and seminars.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = Training::distinct()->limit(6)->get(['location']);
        $trainings  = jobcategories::limit(4)->get();
        return view('content.training', compact('trainings','locations'));
    }
    
    public function showcategory(jobcategories $category)
    {   
        return view('content.showtrainingcategory', compact('category'));
    }
    
    public function showtraining(Training $training)
    {
        return view('content.showtraining', compact('training'));
    }
}

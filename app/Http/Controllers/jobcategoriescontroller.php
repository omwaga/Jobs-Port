<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobcategories;

class jobcategoriescontroller extends Controller
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

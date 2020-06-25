<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Education;

class EducationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'institution' => 'required',
            'qualification' => 'required',
            'score' => 'required',
            'start_date' => 'required',
            'grad_date' => 'required',
            'level' => 'required'
            ]);
            
        Education::create($attributes + ['user_id' => auth()->user()->id]);
        
        return back();
    }
    
    public function update(Request $request)
    {
        $education = request()->id;
        
        Education::where('id', $education)
               ->update(request(['institution', 'qualification', 'score', 'level', 'start_date', 'grad_date']));
               
        return back();
    }
}

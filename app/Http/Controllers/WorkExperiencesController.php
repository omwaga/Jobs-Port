<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\WorkExperience;

class WorkExperiencesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
       $attributes = request()->validate([
           'employer' => ['required', 'min:3'],
           'position' => 'required',
           'start_date' => 'required',
           'end_date' => 'nullable',
           'roles' => 'required',
           'current_employer' => 'nullable'
           ]);
           
       WorkExperience::create($attributes + ['user_id' => auth()->user()->id]);
       
       return back();
        
    }
    
    public function update(Request $request)
    {
         $id = request()->id;
        WorkExperience::where('id', $id)
                     ->update(request(['employer', 'position', 'start_date', 'end_date', 'roles', 'current_employer']));
                     
        return back();
    }
}

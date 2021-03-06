<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Skills;

class SkillsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $skills = Skills::where('user_id', auth()->user()->id)->get();
        return $skills;
    }
    
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'skillname' => 'required',
            'level' => 'required'
            ]);
            
        Skills::create($attributes + ['user_id' => auth()->user()->id]);
        
        return back();
    }
    
    public function update(Request $request)
    {
        $skill = request()->id;
        
        Skills::where('id', $skill)
             ->update(request(['skillname', 'level']));
             
        return back();
    }

    public function destroy(Skills $jobskill)
    {
      $jobskill->delete();

      return back()->with('message', 'The Skll has been deleted Successfully!');
    }
}

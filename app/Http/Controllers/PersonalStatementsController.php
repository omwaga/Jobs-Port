<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\PersonalStatement;

class PersonalStatementsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'statement' => 'required'
            ]);
            
        PersonalStatement::create($attributes + ['user_id' => auth()->user()->id]);
        
        return back();
        
    }
    
    public function update(Request $request)
    {
        PersonalStatement::where('user_id', auth()->user()->id)
                        ->update(request(['statement']));
        
        return back();
    }
}

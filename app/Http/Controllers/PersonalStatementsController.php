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

        PersonalStatement::create($attributes + [
            'category1' => $request->category1,
            'category2' => $request->category2,
            'category3' => $request->category3,
            'category4' => $request->category4,
            'category5' => $request->category5,
            'category6' => $request->category6,
            'category7' => $request->category7,
            'category8' => $request->category8,
            'category9' => $request->category9,
            'category10' => $request->category10,
            'category11' => $request->category11,
            'category12' => $request->category12,
            'user_id' => auth()->user()->id
        ]);
        
        return back();
        
    }
    
    public function update(Request $request)
    {
     PersonalStatement::where('user_id', auth()->user()->id)
     ->update([
        'category1' => NULL, 
        'category2' => NULL, 
        'category3' => NULL, 
        'category4' => NULL, 
        'category5' => NULL, 
        'category6' => NULL, 
        'category7' => NULL, 
        'category8' => NULL, 
        'category9' => NULL, 
        'category10' => NULL, 
        'category11' => NULL, 
        'category12' => NULL,
    ]);

     PersonalStatement::where('user_id', auth()->user()->id)
     ->update(request(['statement', 'category1', 'category2', 'category3', 'category4', 'category5', 'category6', 'category7', 'category8', 'category9', 'category10', 'category11', 'category12']));

     return back();
 }
}

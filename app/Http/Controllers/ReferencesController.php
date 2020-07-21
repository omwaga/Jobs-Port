<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Reference;

class ReferencesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'position' => 'required',
            'organization' => 'required',
            'phone' => 'required',
            'email' => 'required',
            ]);
            
        Reference::create($attributes + ['user_id' => auth()->user()->id]);
        
        return back();
    }
    
    public function update(Request $request)
    {
        $ref = request()->id;
        
        Reference::where('id', $ref)
               ->update(request(['name', 'position', 'organization', 'phone', 'email']));
               
        return back();
    }

    public function destroy(Reference $reference)
    {
        return $reference;
    }
}

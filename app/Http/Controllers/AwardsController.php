<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Awards;

class AwardsController extends Controller
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
            'institution' => 'required',
            'award_date' => 'required',
            'description' => 'required',
        ]);
        
        Awards::create($attributes + ['user_id' => auth()->user()->id]);
        
        return back();
    }
    
    public function update(Request $request)
    {
        $award = request()->id;
        
        Awards::where('id', $award)
        ->update(request(['institution', 'description', 'name', 'award_date']));

        return back();
    }

    public function destroy(Awards $award)
    {
      $award->delete();

      return back()->with('message', 'The Award has been deleted Successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CoverLetter;

class CoverLettersController extends Controller
{
    public function index()
    {
    	$cover_letters = CoverLetter::all();

    	return view('admin.cover-letter', compact('cover_letters'));
    }

    public function store(Request $request)
    {
    	$attributes = request()->validate([
    		'name' => ['required', 'min:3'],
    		'description' => ['required', 'min:15'],
    		'cover_letter' => 'required'
    	]);

    	if ($request->hasFile('cover_letter')) {
            $attributes['cover_letter'] = $request->cover_letter->getClientOriginalName();
            $request->cover_letter->storeAs('public', $attributes['cover_letter']);
        }
     
     CoverLetter::create($attributes);

    return redirect()->back()->with('message', 'The template has been uploaded successfully');    
   }

   public function edit()
   {
   	dd('hello');
   }

   public function destroy()
   {
   	dd('hello');
   }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\CvUpload;

class CvUploadsController extends Controller
{
    // Method to store the uploaded cv
public function store(Request $request)
{
    $book = $request->validate([
    	'name' => ['required', 'min:3'],
    	'description' => ['required', 'min:15'],
    	'resume' => 'required'
    ]);

    if ($request->hasFile('resume')) {
        $book['resume'] = $request->resume->getClientOriginalName();
        $request->resume->storeAs('public', $book['resume']);
    }
    CvUpload::create($book);

    return redirect()->back()->with('message', 'The template has been uploade successfully');
}

public function destroy($id)
{
	dd('hello');
}
}

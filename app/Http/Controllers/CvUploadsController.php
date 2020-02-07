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
    $book = $request->all();
    if ($request->hasFile('resume')) {
        $book['resume'] = $request->resume->getClientOriginalName();
        $request->resume->storeAs('cvs', $book['resume']);
    }
    CvUpload::create($book);

    return redirect()->back()->with('message', 'Your cv has been uploaded successfully');
}
}

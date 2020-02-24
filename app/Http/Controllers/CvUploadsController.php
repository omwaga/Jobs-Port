<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\CvUpload;

class CvUploadsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function show()
    {

    }
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

public function destroy(CvUpload $cvupload)
{
	$cvupload->delete();

    return back()->with('message', 'The Resume Template has been deleted successfully');
}

public function edit(CvUpload $cvupload)
{
    return view('admin.edit-resume', compact('cvupload'));
}

public function update(CvUpload $cvupload)
{
    $book = request()->validate([
        'name' => ['required', 'min:3'],
        'description' => ['required', 'min:15'],
        'resume' => 'required'
    ]);

    if (request()->hasFile('resume')) {
        $book['resume'] = request()->resume->getClientOriginalName();
        request()->resume->storeAs('public', $book['resume']);
    }

   $cvupload->update($book);

   return redirect('/admin-resume')->with('message', 'The resume template has been updated successfully');
}
}

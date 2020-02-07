<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\ResumeSample;
use App\ResumeDomain;

class ResumeSamplesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $resume_samples = ResumeSample::all();
       $resume_domains = ResumeDomain::all();

       return view('admin.resume-samples', compact('resume_samples', 'resume_domains'));
    }

    public function show($name)
    {
        $sample = ResumeSample::where('name', $name)->first();
        $resume_domains = ResumeDomain::all();

        return view('admin.view-resumesample', compact('sample', 'resume_domains'));
    }
    
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'domain_id' => 'required'
        ]);

        ResumeSample::create($attributes);

        return redirect()->back()->with('message','Sample Created successfully');
    }
    
    public function update(ResumeSample $resumesample)
    {
        $resumesample->update(request(['domain_id', 'name']));

        return redirect('/resumesamples')->with('message', 'Resume Sample updated successfully!');
    }   
    
    

    public function destroy($name)
    {
        $resume_sample = ResumeSample::where('name', $name)->first();
        // return $sample;

        $resume_sample->delete();

        return redirect()->back()->with('message', 'Resume Sample has been deleted successfully');
    }


}

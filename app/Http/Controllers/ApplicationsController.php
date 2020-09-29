<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Country;
use App\Skills;
use App\Reference;
use App\JobseekerDetail;
use App\PersonalStatement;
use App\WorkExperience;
use App\Education;
use App\Awards;
use App\Jobposts;
use App\JobApplication;
use App\Industry;
use App\Town;
use App\jobcategories;
use App\ExpressCategory;

class ApplicationsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $applications = JobApplication::where('user_id', auth()->user()->id)->paginate(12);
        $industries=Industry::orderBy('name','asc')->get();
        $locations = Town::orderBy('name','asc')->get();
        $categories=jobcategories::orderBy('jobcategories','asc')->get();
        
        return view('jobseeker-dashboard.applications', compact('applications', 'industries', 'locations', 'categories'));
    }
    
    public function apply($id){
        $job = Jobposts::where('id', $id)->first();
        $states=Town::orderBy('name','asc')->get();
        $industries=Industry::orderBy('name','asc')->get();
        $countries = Country::all();
        $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
        $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
        $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
        $education = Education::where('user_id', '=', auth()->user()->id)->get();
        $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
        $references = Reference::where('user_id', '=', auth()->user()->id)->get();
        $skills = Skills::where('user_id', '=', auth()->user()->id)->get();
        $categories = ExpressCategory::orderBy('name','asc')->get();
        
        return view('jobseeker-dashboard.apply', compact('job', 'countries', 'personalinfo', 'references',
           'personalstatements', 'experience', 'education', 'awards', 'skills', 'states', 'categories'));
    }
    
    public function store(Request $request)
    {
        $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
        $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
        $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
        $education = Education::where('user_id', '=', auth()->user()->id)->get();
        $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
        $references = Reference::where('user_id', '=', auth()->user()->id)->get();
        $skills = Skills::where('user_id', '=', auth()->user()->id)->get();

        if(!$personalinfo ||!$personalstatements || $education->count() === 0 || $experience->count() === 0|| $awards->count() === 0 || $references->count() === 0 || $skills->count() === 0)
        {
            return  back()->with('message', 'Please Complete Your Profile before Submitting your application!');
        }
        else
        {
            $attributes = request()->validate([
               'job_id' => 'required',
               'employer_id' => 'required'
           ]);

            if(JobApplication::where('job_id', $request->input('job_id'))->where('user_id', auth()->user()->id)->count() === 1){
               return redirect('/already-applied');
           }
           else
           {

            JobApplication::create($attributes + ['user_id' => auth()->user()->id]);
            return redirect('/successfullapplication');
        }
    }

}

public function success()
{
    return view('jobseeker-dashboard.successfulapplication');
}
public function appalready(){
 return view('jobseeker-dashboard.appliedalready'); 
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobposts;
use App\JobApplication;
use App\Shortlist;
use App\User;
use App\jobcategories;
use App\Industry;
use App\Town;
use App\Country;
use Auth;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    public function home()
    {
        $dashboard_jobs = Jobposts::where('employer_id', auth()->user()->employer_id)->get();
        $jobs = Jobposts::where('employer_id', auth()->user()->employer_id)->orderBy('created_at', 'DESC')->limit(5)->get();
        $applications = JobApplication::where('employer_id', auth()->user()->employer_id)->orderBy('created_at', 'DESC')->get();
        $shortlisted = Shortlist::where('employer_id', auth()->user()->employer_id)->get();
        $declined = JobApplication::where([
            ['employer_id', auth()->user()->employer_id],
            ['status', 'declined']
        ])->get();

        return view('staff.dashboard',compact('jobs','applications', 'shortlisted', 'declined', 'dashboard_jobs'));
    }

    //return the view to select the job post method
    public function joboptions()
    {
        return view('staff.job-options');
    }

    //Listing all jobs posted
    public function alljobs()
    {
        $jobs = Jobposts::where('employer_id', Auth::user()->employer_id)->orderBy('created_at','desc')->get();

        return view('staff.jobs', compact('jobs'));
    }

    public function postajob(){
        $jobcategory=jobcategories::orderBy('jobcategories','asc')->get();
        $industry=Industry::orderBy('name','asc')->get();
        $towns=Town::orderBy('name','asc')->get();
        $countries = Country::all();

        return view('staff.postjob',compact(['towns','industry','jobcategory', 'countries']));
    }

    // show the jobs with the applications received
    public function jobwithapplications($id)
    {
        $job = Jobposts::where([
            ['id', $id],
            ['employer_id', '=', Auth::user()->employer_id]
        ])->first();

        return view('staff.job-withapplications', compact('job'));
    }

    public function editjob($id)
    {
        $jobpost = Jobposts::findOrFail($id);
        $jobcategory=jobcategories::orderBy('jobcategories','asc')->get();
        $industry=Industry::orderBy('name','asc')->get();
        $towns=Town::orderBy('name','asc')->get();
        $countries = Country::all();
        
        
        return view('staff.update-job', compact('jobcategory', 'industry', 'towns', 'jobpost', 'countries'));
    }


    public function postjob(Request $request){
        $this->validate($request,[
            'job_title'=>'required|min:3',
            'employment_type'=>'required',
            'category'=>'required',
            'industry'=>'required',
            'salary'=>'nullable',
            'expiry_date'=>'required',
            'job_description'=>'required',
            'job_requirements'=>'required',
            'country' => 'required',
            'state'=>'required',
            'application_details'=>'required',
            'apply_with_us'=>'nullable',
        ]);

        $jobpost= new Jobposts;
        $jobpost->employer_id=Auth::user()->employer_id;
        $jobpost->job_title=$request->input('job_title');
        $jobpost->job_type= '';
        $jobpost->jobcategories_id=$request->input('category');
        $jobpost->industry=$request->input('industry');
        $jobpost->country_id=$request->input('country');
        $jobpost->location=$request->input('state');
        $jobpost->salary=$request->input('salary');
        $jobpost->deadline=$request->input('expiry_date');
        $jobpost->summary=$request->input('job_description');
        $jobpost->description=$request->input('job_requirements');
        $jobpost->application_details=$request->input('application_details');
        $jobpost->apply=$request->input('apply_with_us');
        $jobpost->employment_type=$request->input('employment_type');
        $jobpost->save();
        return redirect(route('team.jobs'))->with('message','You have successfully posted your job');
    }

    public function updatejob($id, Request $request)
    {
        $jobpost = Jobposts::findOrFail($id);

        $jobpost->update(request(['job_title', 'job_type', 'jobcategories_id', 'country_id', 'location','employment_type','industry', 'salary', 'deadline', 'summary', 'description', 'application_details', 'apply']));
        
        return redirect(route('team.jobs'))->with('message', 'Job post has been updated successfully');
    }
}

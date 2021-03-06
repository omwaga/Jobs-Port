<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\JobPostUpdated;
use Illuminate\Support\Facades\Mail;
use App\Jobposts;
use App\jobcategories;
use App\Industry;
use App\Town;
use App\Country;

class JobListController extends Controller
{    
    public function index()
    {
        $jobs = Jobposts::OrderBy('created_at', 'DESC')->where('employer_id',Auth::guard('employer')->user()->id)->get();
        
        return view('employer-dashboard.jobs', compact('jobs'));
    }

    //show view to create a new training
    Public function create(){
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training){  
    }

    /**
     * Show the fom for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobposts $jobpost)
    {
        $jobcategory=jobcategories::orderBy('jobcategories','asc')->get();
        $industry=Industry::orderBy('name','asc')->get();
        $towns=Town::orderBy('name','asc')->get();
        $countries = Country::all();
        
        
        return view('employer-dashboard.updatejob', compact('jobcategory', 'industry', 'towns', 'jobpost', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Jobposts $jobpost, Request $request)
    {

        $jobpost->update(request(['job_title', 'job_type', 'jobcategories_id', 'country_id', 'location','employment_type','industry', 'salary', 'deadline', 'summary', 'description', 'application_details', 'apply']));

        Mail::to(Auth::guard('employer')->user()->company_email)->send(new JobPostUpdated());
        
        return redirect('/jobposts')->with('message', 'Job post has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $job = Jobposts::findOrFail($request->job_id);

        $job->update(['status' => 'inactive']);
        
        return back()->with('message', 'The Job Post has been Unpublished successfully!');
    }


    public function publish(Request $request)
    {
        $job = Jobposts::findOrFail($request->job_id);

        $job->update(['status' => 'active']);
        
        return back()->with('message', 'The Job Post has been published successfully!');
    }
}

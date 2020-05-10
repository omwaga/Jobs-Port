<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employer;
use App\Jobposts;
use App\User;
use App\JobApplication;
use App\Industry;
use App\jobcategories;
use App\Town;
use App\Country;
use DB;

class TheEmployersController extends Controller
{
	// return the dashboard for the super employer
    public function dashboard()
    {
    	$employers = Employer::all();
    	$jobseekers = User::all();
    	$jobs = Jobposts::all();
    	$applications = JobApplication::all();

    	return view('super-employer.dashboard', compact('employers', 'jobseekers', 'jobs', 'applications'));
    }
    //return the job creatio form for the employer
    public function createjob()
    {
    	$industries = Industry::all();
    	$categories = jobcategories::all();
    	$countries = Country::all();
    	$towns = Town::all();
    	$employers = Employer::all();

    	return view('super-employer.create-job', compact('industries', 'categories', 'countries', 'towns', 'employers'));
    }

//Save the job created by the super employer to the database
    public function savejob(Request $request)
    {
        $attributes = request()->validate([
            'job_title' => ['required', 'min:3'],
            'employer_name' => 'required',
            'employer_logo' => 'nullable',
            'job_type' => 'nullable',
            'employment_type' => 'nullable',
            'jobcategories_id' => 'nullable',
            'industry' => 'nullable',
            'employer_name'=> 'nullable',
            'country_id' => 'nullable',
            'location' => 'nullable',
            'salary' => 'nullable',
            'deadline' => 'nullable',
            'summary' => ['nullable', 'max:350'],
            'description'=> ['nullable'],
            'application_details' => ['required'],
            'apply' => 'nullable'
        ]);

        if ($request->hasFile('employer_logo')) {
        $attributes['employer_logo'] = $request->employer_logo->getClientOriginalName();
        $request->employer_logo->storeAs('public/job_logos', $attributes['employer_logo']);
    }

        Jobposts::create($attributes + ['employer_id' => 1]);

        return redirect('/super-employer/all-jobs')->with('message', 'The job post has been created succsefully');
    }

    // return all the registered employers
    public function employers()
    {
        $employers = Employer::paginate(20);

        return view('super-employer.employers', compact('employers'));
    }

    //Load the form to add a new employer
    public function employer()
    {
        $jobcategories = jobcategories::orderBy('jobcategories','asc')->get();
        $industries = Industry::orderBy('name','asc')->get();
        $towns = Town::orderBy('name','asc')->get();
        $countries = DB::table('countries')->pluck("name","id");

        return view('super-employer.add-employer',compact('jobcategories', 'industries', 'towns', 'countries'));
    }

    //Add a new employer to the databse
    public function addemployer(Request $request)
    {
        $attributes = request()->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'personal_email'=>'required',
            'postal_code'=>'nullable',
            'company_phone_number'=>'required',
            'job_title'=>'required',
            'company_address'=>'required',
            'company_name'=>'required',
            'company_location'=>'required',
            'company_website'=>'nullable',
            'company_industry'=>'required',
            'company_email'=>'required',
            'company_size'=>'nullable',
            'employer_type'=>'required',
            'personal_phone_number'=>'required|max:15|min:10',
            'country'=>'required',
            'company_address'=>'required',
            'logo'=>'nullable',
            'username'=>'nullable',
        ]);

        Employer::create($attributes);

        return back()->with('message', 'The employer has been succsefullycreated');
    }

    // Update form for the posted job
    public function updateform($id)
    {
        $job = Jobposts::findOrFail($id);
        $industries = Industry::all();
        $categories = jobcategories::all();
        $countries = Country::all();
        $towns = Town::all();
        $employers = Employer::all();

        return view('super-employer.update-job', compact('industries', 'categories', 'countries', 'towns', 'employers', 'job'));
    }

    //Update the posted job by the super employer
    public function updatejob(Request $request, $id)
    {
        $attributes = request()->validate([
            'job_title' => ['required', 'min:3'],
            'employer_name' => 'required',
            'employer_logo' => 'nullable',
            'job_type' => 'nullable',
            'employment_type' => 'nullable',
            'jobcategories_id' => 'nullable',
            'industry' => 'nullable',
            'employer_name'=> 'nullable',
            'country_id' => 'nullable',
            'location' => 'nullable',
            'salary' => 'nullable',
            'deadline' => 'nullable',
            'summary' => ['nullable', 'max:350'],
            'description'=> ['nullable'],
            'application_details' => ['required'],
            'apply' => 'nullable'
        ]);

        $job = Jobposts::findOrFail($id);

        if ($request->hasFile('employer_logo')) {
        $attributes['employer_logo'] = $request->employer_logo->getClientOriginalName();
        $request->employer_logo->storeAs('public/job_logos', $attributes['employer_logo']);
    }

        Jobposts::where('id', $id)->update([
            'job_title' => $request->job_title,
            'employer_name' => $request->employer_name,
            'employer_logo' => $attributes['employer_logo'],
            'job_type' => $request->job_type,
            'jobcategories_id' => $request->jobcategories_id,
            'industry' => $request->industry,
            'employment_type' => $request->employment_type,
            'country_id' => $request->country_id,
            'location' => $request->location,
            'salary' => $request->salary,
            'deadline' => $request->deadline,
            'summary' => $request->summary,
            'description'=> $request->description,
            'application_details' => $request->application_details,
            'apply' => $request->apply,
            // 'employer_id' => $request->employer_id
    ]);

        return redirect('/super-employer/all-jobs')->with('message', 'The Job post has been updated successfully');
    }

    // deleted posted job
    public function deletejob($id)
    {
        $job = Jobposts::findOrFail($id);
        $job->delete();

        return back()->with('message', 'The Job Post has been deleted successfully');
    }


    //Display all the jobs from the databse posted by the employers
    public function jobs()
    {
        $vacancies = Jobposts::Orderby('created_at', 'DESC')->paginate(20);

    	return view('super-employer.all-jobs', compact('vacancies'));
    }

}

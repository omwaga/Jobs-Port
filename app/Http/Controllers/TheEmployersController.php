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
        	'employer_id' => 'required',
            'jobtitle' => ['required'],
            'jobtype' => 'required',
            'jobcategories_id' => 'required',
            'industry' => 'required',
            'country_id' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'expirydate' => 'required',
            'summary' => ['required'],
            'description'=> ['required'],
            'applicationdet' => ['required'],
            'apply' => 'nullable'
        ]);

        Jobposts::create($attributes + ['employer_id' => 1]);

        return rediret('/super-employer/all-job')->with('message', 'The job post has been created succsefully');
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


    //Display all the jobs from the databse posted by the employers
    public function jobs()
    {
    	dd('hell0');
    }
}

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

    //Display all the jobs from the databse posted by the employers
    public function jobs()
    {
    	dd('hell0');
    }
}

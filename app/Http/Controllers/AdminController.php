<?php

namespace App\Http\Controllers;

// use App\jobcategories;
// use App\Industry;
use App\JobApplication;
use App\Jobposts;
use App\User;
use App\Employer;
use App\Industry;
use App\jobcategories;
use App\Town;
use App\country;
use DB;

use App\CvUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /*
     * Show admin pannel
     * */
    public function dashboard(){
        $users = User::all();
        $jobs = Jobposts::all();
        $employers = Employer::all();
        $applications = JobApplication::all();
        
        return view('admin.admin-dashboard', compact('users', 'jobs', 'employers', 'applications'));
    }
    
    // All Employers
    public function adminemployers()
    {
        $employers = Employer::all();
        
        return view('admin.admin-employers', compact('employers'));
    }
    
    // All Jobseekers
    public function adminjobseekers()
    {
        $jobseekers = User::paginate(36);
        
        return view('admin.admin-jobseekers', compact('jobseekers'));
    }
    
    // All job vacancies
    public function adminvacancies()
    {
        $vacancies = Jobposts::paginate(10);
        
        return view('admin.admin-vacancies', compact('vacancies'));
    }
    
    // All job Applications
    public function adminapplications()
    {
        $applications = JobApplication::latest()->paginate(15);
        
        return view('admin.admin-applications', compact('applications'));
    }

    //admin resumes pdf view
    public function resume()
    {
        $resumes = CvUpload::all();

        return view('admin.resume', compact('resumes'));
    }

    // manage industries
    public function industry()
    {
        $industries = Industry::all();

        return view('admin.industries', compact('industries'));
    }

    // manage categories
    public function category()
    {
        $categories = jobcategories::all();

        return view('admin.categories', compact('categories'));
    }

    public function employer()
    {
        $jobcategories = jobcategories::orderBy('jobcategories','asc')->get();
        $industries = Industry::orderBy('name','asc')->get();
        $towns = Town::orderBy('name','asc')->get();
        $countries = DB::table('countries')->pluck("name","id");

        return view('admin.add-employer',compact('jobcategories', 'industries', 'towns', 'countries'));
    }

    public function addemployer(Request $request)
    {
        $attributes = $request->validate([
            'employer_name' => ['required', 'min:3'],
            'country' => 'nullable',
            'state' => 'nullable',
            'industry' => 'nullable',
            'website' => 'nullable',
            'email' => 'required',
            'employer_type' => 'nullable',
            'phone' => 'required',
            'physical_address' => 'nullable',
            'logo' => 'nullable',
            'description' => 'nullable'
        ]);

        Employer::create($attributes);

        return back()->with('message', 'The employer has been succsefullycreated');
    }

    public function createjob()
    {
        $jobcategories = jobcategories::orderBy('jobcategories','asc')->get();
        $industries = Industry::orderBy('name','asc')->get();
        $towns = Town::orderBy('name','asc')->get();
        $countries = Country::all();

        return view('admin.create-job', compact('jobcategories', 'industries', 'towns', 'countries'));
    }

    public function savejob(Request $request)
    {
        $attributes = request()->validate([
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

        return back()->with('message', 'The job post has been created succsefully');
    }

}


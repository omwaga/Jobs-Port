<?php

namespace App\Http\Controllers;

// use App\jobcategories;
// use App\Industry;
use App\JobApplication;
use App\Jobposts;
use App\User;
use App\Cprofile;
use App\Industry;
use App\jobcategories;
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
        $employers = Cprofile::all();
        $applications = JobApplication::all();
        
        return view('admin.admin-dashboard', compact('users', 'jobs', 'employers', 'applications'));
    }
    
    // All Employers
    public function adminemployers()
    {
        $employers = Cprofile::all();
        
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
}


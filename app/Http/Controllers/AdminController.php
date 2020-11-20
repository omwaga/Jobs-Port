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
use App\WorkProgramEnrollment;
use DB;
use App\CvUpload;
use App\JobseekerDetail;
use App\PersonalStatement;
use App\Education;
use App\WorkExperience;
use App\Reference;
use App\Awards;
use App\Skills;
use App\ExpressCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

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
        $employers = Employer::paginate(20);
        
        return view('admin.admin-employers', compact('employers'));
    }
    
    // All Jobseekers
    public function adminjobseekers()
    {
        $jobseekers = User::orderBy('created_at', 'DESC')->paginate(20);
        
        return view('admin.admin-jobseekers', compact('jobseekers'));
    }
    
    // All job vacancies
    public function adminvacancies()
    {
        $vacancies = Jobposts::orderBy('created_at', 'DESC')->paginate(20);
        
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

    public function employer()
    {
        $jobcategories = jobcategories::orderBy('jobcategories','asc')->get();
        $industries = Industry::orderBy('name','asc')->get();
        $towns = Town::orderBy('name','asc')->get();
        $countries = DB::table('countries')->pluck("name","id");

        return view('admin.add-employer',compact('jobcategories', 'industries', 'towns', 'countries'));
    }

// Display the candidates enrolled for the work program
    public function enrolledcandidates()
    {
        $candidates = WorkProgramEnrollment::all();

        return view('admin.enrolled-candidates', compact('candidates'));
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

        return back()->with('message', 'The employer has been created succsefully');
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

// return the jobseekerprofile
    public function jobseekerprofileprofile($name)
    {
        $jobseekerdetail = JobseekerDetail::where('user_id', $name)->first();
        $personalstatement = PersonalStatement::where('user_id', $name)->first();
        $academics = Education::where('user_id', $name)->get();
        $experiences = WorkExperience::where('user_id', $name)->get();
        $referees = Reference::where('user_id', $name)->get();
        $certifications = Awards::where('user_id', $name)->get();
        $skills = Skills::where('user_id', $name)->get();

        return view('admin.jobseeker-profile', compact( 'jobseekerdetail', 'personalstatement', 
            'academics', 'experiences', 'referees', 'certifications','skills'));
    }

    //Express candidates
    public function expresscandidates()
    {
      $jobseekers = PersonalStatement::whereNotNull('category')->paginate(20);
      $categories=ExpressCategory::orderBy('name','asc')->get();

      return view('admin.express-candidates', compact('jobseekers'));
  }

    //export jobseekers to PDF
  public function export()
  {
    return Excel::download(new UsersExport, 'jobseekers.xlsx');
}

}


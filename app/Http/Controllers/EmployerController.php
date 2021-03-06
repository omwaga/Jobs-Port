<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\PersonalStatement;
use App\Jobposts;
use App\Shortlist;
use App\Companies;
use App\Usercategories;
use App\Application;
use App\jobcategories;
use App\Employer;
use DB;
use App\User;
use App\Education;
use App\WorkExperience;
use App\Awards;
use App\JobApplication;
use App\Skills;
use App\Reference;
use App\JobseekerDetail;
use App\EmployerDocument;
use App\TalentpoolCandidates;
use App\TalentPool;
use App\Industry;
use App\Locations;
use App\Town;
Use App\Country;
use App\ExpressCategory;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
    }
    
    public function allapplicants(){
        $application=JobApplication::where([
            ['employer_id',Auth::guard('employer')->user()->id],
            ['status', 'applied']
        ])->orderBy('created_at', 'DESC')->paginate(12);
        return view('employer-dashboard.allapplicants',compact('application'));
    }
    
    // method to show the applicants full career profile
    public function fullprofile($id)
    {
        $jobseekerdetail = JobseekerDetail::where('user_id', $id)->first();
        $personalstatement = PersonalStatement::where('user_id', $id)->first();
        $academics = Education::where('user_id', $id)->get();
        $experiences = WorkExperience::where('user_id', $id)->get();
        $referees = Reference::where('user_id', $id)->get();
        $certifications = Awards::where('user_id', $id)->get();
        $skills = Skills::where('user_id', $id)->get();
        $talent=TalentPool::whereIn('employer_id', [0,Auth::guard('employer')->user()->id])->get();

        return view('employer-dashboard.viewapplicantprofile', compact( 'jobseekerdetail', 'personalstatement', 
            'academics', 'experiences', 'referees', 'certifications','skills', 'talent'));
    }

    // method to show the candidate's  career profile for the resume database access
    public function candidateprofile($id)
    {
        $jobseekerdetail = JobseekerDetail::where('user_id', $id)->first();
        $personalstatement = PersonalStatement::where('user_id', $id)->first();
        $academics = Education::where('user_id', $id)->get();
        $experiences = WorkExperience::where('user_id', $id)->get();
        $referees = Reference::where('user_id', $id)->get();
        $certifications = Awards::where('user_id', $id)->get();
        $skills = Skills::where('user_id', $id)->get();
        $talent=TalentPool::whereIn('employer_id', [0,Auth::guard('employer')->user()->id])->get();

        return view('employer-dashboard.resume-view', compact( 'jobseekerdetail', 'personalstatement', 
            'academics', 'experiences', 'referees', 'certifications','skills', 'talent'));
    }
    
    public function employerdash(){
        $dashboard_jobs = Jobposts::where('employer_id',auth()->id())->get();
        $jobs = Jobposts::where('employer_id',auth()->id())->orderBy('created_at', 'DESC')->limit(5)->get();
        $applications = JobApplication::where('employer_id', auth()->id())->orderBy('created_at', 'DESC')->get();
        $shortlisted = Shortlist::where('employer_id', Auth::guard('employer')->user()->id)->get();
        $declined = JobApplication::where([
            ['employer_id', Auth::guard('employer')->user()->id],
            ['status', 'declined']
        ])->get();

        $jobseekers = User::all()->random(4);

        return view('employer-dashboard.dashboard',compact('jobs','applications', 'jobseekers', 'shortlisted', 'declined', 'dashboard_jobs'));
    }

//show all talent pools from the database    
    public function talentpool(){
        $talent=TalentPool::whereIn('employer_id', [0,Auth::guard('employer')->user()->id])->get();
        
        return view('employer-dashboard.talentpool',compact(['talent']));
    }
    
//New talent pool name
    public function newpool(Request $request)
    {
        $attributes = request()->validate([
            'pool_name' => ['required', 'min:3']
        ]);
        
        TalentPool::create($attributes + ['employer_id' => Auth::guard('employer')->user()->id]);
        
        return redirect('/talentpool');
    }
    
// Add applicant to talentpool
    public function addtalentpool(Request $request, $name)
    {
       $pool_id = request()->pool_name;

       DB::table('job_applications')
       ->where('user_id', request()->id)
       ->update(['status' => 'pool']);

       $shortlist = new TalentpoolCandidates();
       $shortlist->user_id = request()->id;
       $shortlist->talentpool_id = $pool_id;
       $shortlist->employer_id = Auth::guard('employer')->user()->id;

       $shortlist->save();

       return redirect('/all-applicants')->with('message', 'The candidate has been added to the talent pool successfully');
   }

    // view the talent pool members
   public function poolmembers($id)
   {
    $poolmembers = TalentpoolCandidates::where('talentpool_id', $id)->get();

    return view('employer-dashboard.poolmembers', compact('poolmembers'));
}

//return the view to select the job post method
public function joboptions()
{
    return view('employer-dashboard.jobpost-options');
}

public function postajob(){
    $jobcategory=jobcategories::orderBy('jobcategories','asc')->get();
    $industry=Industry::orderBy('name','asc')->get();
    $towns=Town::orderBy('name','asc')->get();
    $cname=Employer::select('company_name')->where('id',Auth::guard('employer')->user()->id)->get();
    $countries = Country::all();

    return view('employer-dashboard.postjob',compact(['towns','industry','jobcategory','cname', 'countries']));
}

//Employer fininish registration route
public function finishregistration()
{
    return view('employer-dashboard.finish-registration');
}

// upload the registration documents
public function documentsUpload(Request $request)
{
    $attributes = $request->validate([
        'business_permit' => 'nullable',
        'certificate' => 'nullable'
    ]);

    if ($request->hasFile('business_permit')) {
        $attributes['business_permit'] = $request->business_permit->getClientOriginalName();
        $request->business_permit->storeAs('public/employerDocuments', $attributes['business_permit']);
    }
    if ($request->hasFile('certificate')) {
        $attributes['certificate'] = $request->certificate->getClientOriginalName();
        $request->certificate->storeAs('public/employerDocuments', $attributes['certificate']);
    }

    EmployerDocument::create($attributes + ['employer_id' => auth()->user()->id]);

    return redirect(route('employdashboard'))->with('message', 'Verification documents submitted successfully');
}


    //method to decline the applications
public function decline(Request $request)
{
    DB::table('job_applications')
    ->where('user_id', request()->id)
    ->update(['status' => 'declined']);

    return redirect('/all-applicants')->with('message', 'The candidates application has been declined successfully');
}

//method to show the declined job applications
public function declined()
{
    $applicants = JobApplication::where([
        ['employer_id', Auth::guard('employer')->user()->id],
        ['status', 'declined']
    ])->get();

    return view('employer-dashboard.declinedapplications', compact('applicants'));
}

public function cprofile(){
    $profile=Employer::where('id',Auth::guard('employer')->user()->id)->get();
    return view('new.cprofile')->with('profile',$profile);
}

public function jobpost(Request $request){
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
    $jobpost->employer_id=Auth::guard('employer')->user()->id;
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

    Mail::to(Auth::guard('employer')->user()->company_email)->send(new JobPosted());

    return redirect('/jobposts')->with('message','You have successfully posted your job');
}

//Method to shortlist the candidates
public function shortlist(Request $request, $name)
{
   $applicant_id = request()->id;
   $user_id = Jobseekerdetail::where('user_id', $applicant_id)->value('user_id');

   $shortlist = new Shortlist();
   $shortlist->user_id = $user_id;
   $shortlist->employer_id = Auth::guard('employer')->user()->id;

   DB::table('job_applications')
   ->where('user_id', $user_id)
   ->update(['status' => 'shortlisted']);

   $shortlist->save();

   return redirect('/all-applicants')->with('message', 'The candidate has been shortlisted successfully');
}

//Method to show all the shorlisted candidates
public function shortlistedcandidates()
{
 $candidates = Shortlist::where('employer_id', Auth::guard('employer')->user()->id)->get();
 $jobposts = Jobposts::where('employer_id', Auth::guard('employer')->user()->id)->get();

 return view('employer-dashboard.shortlisted-candidates', compact('candidates', 'jobposts'));
}

//Method for picking the templates
public function picktemplate()
{
    $templates = Jobposts::all();
    $jobcategories = jobcategories::all();
    return view('employer-dashboard.templates', compact('templates', 'jobcategories'));
}

// use a template
public function usetemplate($jobtitle)
{
 $jobpost = Jobposts::where('job_title', $jobtitle)->first();
 $jobcategories = jobcategories::orderBy('jobcategories','asc')->get();
 $industries = Industry::orderBy('name','asc')->get();
 $countries = Country::all();
 $towns = Town::orderBy('name','asc')->get();

 return view('employer-dashboard.use-template', compact('jobpost', 'industries', 'jobcategories', 'towns', 'countries'));
}

//Listing all jobs posted
public function alljobs()
{
 $jobs = Jobposts::where('employer_id', Auth::guard('employer')->user()->id)->orderBy('created_at','desc')->get();

 return view('employer-dashboard.jobs', compact('jobs'));
}

//Listing the shortlisted jobs by the job post
public function shortlistjobs(Request $request)
{
    $jobposts = Jobposts::where('employer_id', Auth::guard('employer')->user()->id)->get();
    $job = Jobposts::where('id', $request->jobtitle)->value('job_title');
    $candidates = DB::table('job_applications')
    ->join('shortlists', 'shortlists.user_id', 'job_applications.user_id')
    ->join('jobseeker_details', 'job_applications.user_id', '=', 'jobseeker_details.user_id')
    ->where('job_applications.job_id', $request->jobtitle)
    ->select('jobseeker_details.*')
    ->get();

    return view('employer-dashboard.job-shortlists', compact('candidates', 'jobposts', 'job'));
}

//Remove the shortlisted candidate
public function removeshortlist(Request $request)
{
    $candidate = Shortlist::where('user_id', $request->id)->first();
    $user_id = Shortlist::where('user_id', $request->id)->value('user_id');

    DB::table('job_applications')
    ->where('user_id', $user_id)
    ->update(['status' => 'applied']);
    
    $candidate->delete();
    
    return redirect('/shortlisted-candidates')->with('message', 'The candidate has been removed from the lsit succesfully');
}

public function shortlistview($id)
{
    $jobseekerdetail = JobseekerDetail::where('user_id', $id)->first();
    $personalstatement = PersonalStatement::where('user_id', $id)->first();
    $academics = Education::where('user_id', $id)->get();
    $experiences = WorkExperience::where('user_id', $id)->get();
    $referees = Reference::where('user_id', $id)->get();
    $certifications = Awards::where('user_id', $id)->get();
    $skills = Skills::where('user_id', $id)->get();
    $talent = TalentPool::whereIn('employer_id', [0,Auth::guard('employer')->user()->id])->get();

    return view('employer-dashboard.shortlisted-candidates-view', compact( 'jobseekerdetail', 'personalstatement', 
        'academics', 'experiences', 'referees', 'certifications','skills', 'talent'));
}

// remove the candidat eform the talent pool
public function removepoolmember(Request $request)
{
    $candidate = TalentpoolCandidates::where('user_id', $request->id)->first();
    $user_id = TalentpoolCandidates::where('user_id', $request->id)->value('user_id');

    DB::table('job_applications')
    ->where('user_id', $user_id)
    ->update(['status' => 'applied']);
    
    $candidate->delete();
    
    return back()->with('message', 'The candidate has been removed succesfully from the pool');
}

// remove the declined applicant from the declined applications list
public function removedeclined(Request $request)
{
    DB::table('job_applications')
    ->where('user_id', $request->id)
    ->update(['status' => 'applied']);
    
    return back()->with('message', 'The candidate has been removed from the list succesfully');
}

//express recruitmentview load
public function express()
{
    return view('employer-dashboard.express-recruitment');
}

// get all data of users from the database for the resumes
public function resumedatabase()
{
    $categories = ExpressCategory::orderBy('name','asc')->get();
    $industries = Industry::orderBy('name','asc')->get();
    $jobseekers = JobseekerDetail::paginate(20);
    
    return view('employer-dashboard.resume-database', compact('industries', 'jobseekers', 'categories'));
}

// return the express recruitment candidates
public function candidates($category)
{
  $jobseekers = PersonalStatement::where('category', $category)->paginate(20);
  $categories=ExpressCategory::orderBy('name','asc')->get();
  $countries = DB::table('countries')->get();

  return view('employer-dashboard.express-candidates', compact('jobseekers', 'countries', 'categories'));
}

// search the rsumes
public function searchresume(Request $request)
{
    $industries = Industry::orderBy('name','asc')->get();
    $user_industries = Usercategories::where('industry_id', $request->industry_id)->get();
    
    return view('employer-dashboard.resume-database', compact('industries', 'user_industries'));
}

// show the jobs with the applications received
public function jobwithapplications($id)
{
    $job = Jobposts::where([
        ['id', $id],
        ['employer_id', '=', Auth::guard('employer')->user()->id]
    ])->first();

    return view('employer-dashboard.job-withapplications', compact('job'));
}

//search the job templates based on the category selected by the employer
public function searchtemplate(Request $request)
{
    $jobs = Jobposts::where('jobcategories_id', $request->category)->get();
    $jobcategories = jobcategories::all();

    return view('employer-dashboard.search-template', compact('jobs', 'jobcategories'));
}
}

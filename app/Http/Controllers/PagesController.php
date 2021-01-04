<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Jobposts;
use App\jobcategories;
use App\Locations;
use App\Industry;
use App\ExpressCategory;
use App\TrainingCategory;
use App\Town;
use DB;
use Carbon\Carbon;
use Mail;
use App\Country;
use App\JobseekerDetail;
use App\PersonalStatement;
use App\WorkExperience;
use App\Education;
use App\Skills;
use App\Reference;
use App\Awards;
use App\Usercategories;
use App\Employer;
use App\Companies;
use App\Article;
use App\CvUpload;
use App\State;
use App\ProsSkills;
use App\ProsServices;
use App\ProsDetails;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //return  the home page
  public function homee(){
    $employers = Employer::orderBy('created_at','desc')->limit(4)->get();
    $employers1 = Employer::limit(4)->get();
    $industries=Industry::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $alljobs=Jobposts::all();
    $jobs=Jobposts::orderBy('created_at','desc')->limit(20)->get();
    $government_jobs=Jobposts::where('job_type', 'Government Jobs')->orderBy('created_at','desc')->limit(20)->get();
    $ngo_jobs=Jobposts::where('job_type', 'NGO and Humanitarian Jobs')->orderBy('created_at','desc')->limit(20)->get();
    $un_jobs=Jobposts::where('job_type', 'UN Jobs')->orderBy('created_at','desc')->limit(20)->get();
    $consultancies=Jobposts::where('job_type', 'Consultancy')->orderBy('created_at','desc')->limit(20)->get();
    $countries = DB::table('countries')->pluck("name","id");
    $company=Employer::orderBy('created_at','desc')->limit(6)->get();
    $town=Town::orderBy('name','asc')->get();
    $featured_jobs = Jobposts::whereIn('employer_id', [8, 21])->orderBy('created_at', 'DESC')->limit(3)->get();

    return view('front.home')->with('industry',$industries)
    ->with('jobs',$jobs)
    ->with('countries',$countries)
    ->with('companies',$company)
    ->with('alljobs',$alljobs)
    ->with('categories',$categories)
    ->with('government_jobs',$government_jobs)
    ->with('ngo_jobs',$ngo_jobs)
    ->with('un_jobs',$un_jobs)
    ->with('consultancies',$consultancies)
    ->with('featured_jobs',$featured_jobs)
    ->with('employers',$employers)
    ->with('employers1',$employers1)
    ->with('towns',$town);

  }

  public function loginoptions()
  {
    return view('front.login-options');
  }

//return the page for the jobseekers
  public function jobseekers()
  {
    return view('front.jobseekers');
  }

//return the page for the employers
  public function employers()
  {
    return view('front.employers');
  }

//return the view to register an employer
  public function cprofile(){
    $industry = Industry::orderBy('name','asc')->get();
    $town = Town::orderBy('name','asc')->get();
    $countries = DB::table('countries')->pluck("name","id");
    
    return view('front.create-employerprofile')->with('industry',$industry)
    ->with('town',$town)
    ->with('countries',$countries);
  }

  public function hire(){
    return view('front.Employerlogin');
  }

//Express recruitment
public function express()
{
  SEOMeta::setTitle('Express Recruitment Categories');
  $express_categories = ExpressCategory::orderBy('id', 'DESC')->paginate(20);
  $categories=ExpressCategory::orderBy('name','asc')->get();
  $countries = DB::table('countries')->pluck("name","id");
  return view('front.express-recruitment', compact('categories', 'countries', 'express_categories'));
}

// Express candidates
public function expresscandidates($category)
{
  $job_category = ucwords(str_replace('-', ' ', $category));
  $category = ExpressCategory::where('name', $job_category)->value('id');
  SEOMeta::setTitle($job_category);

  $jobseekers = PersonalStatement::where('category', $category)->paginate(20);
  $categories=ExpressCategory::orderBy('name','asc')->get();
  $countries = DB::table('countries')->pluck("name","id");

  return view('front.express-candidates', compact('jobseekers', 'countries', 'categories', 'job_category'));
}
// Express candidates
public function expressfilter(Request $request)
{
  SEOMeta::setTitle('Express Recruitment search Results');
  if ($request->category !== null) {
    $job_category = ExpressCategory::where('id', $request->category)->value('name');
    $jobseekers = PersonalStatement::where('category', $request->category)->paginate(20);
    $categories=ExpressCategory::orderBy('name','asc')->get();
    $countries = DB::table('countries')->pluck("name","id");

    return view('front.express-candidates', compact('jobseekers', 'countries', 'categories', 'job_category'));
  }
  else if($request->country !== null)
  {  
    $job_category = ExpressCategory::where('id', $request->category)->value('name');
    $jobseekers = JobseekerDetail::where('nationality', $request->country)->paginate(20);
    $categories=ExpressCategory::orderBy('name','asc')->get();
    $countries = DB::table('countries')->pluck("name","id");

    return view('front.express-candidates-filter', compact('jobseekers', 'countries', 'categories', 'job_category'));
  }else
  {    
    return redirect(route('express'));
  }
}

public function companies()
{
  $companies = Employer::all();

  return view('front.all-companies', compact('companies'));
}

// function to view a single company profile
public function employerProfile($name)
{
  $employer = Employer::where('company_name', ucwords(str_replace('-', ' ', $name)))->first();
  $jobs = Jobposts::where('employer_id', $employer->id)->paginate(10);
  
  return view('front.company', compact('employer', 'jobs'));
}

public function employerlogin()
{
  return view('front.foremployer');
}

//the jobseeker registration steps.
public function jobseekerregister()
{
  return view('front.jobseeker-steps');
}

//  all jobs available in the database
public function alljobs(){
  $jobs=Jobposts::where('status', 'active')->orderBy('created_at', 'DESC')->paginate(12);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  $countries = DB::table('countries')->pluck("name","id");
  $featured_jobs = Jobposts::whereIn('employer_id', [8, 21])->orderBy('created_at', 'DESC')->limit(3)->get();
  
  return view('front.all-jobs',compact('jobs', 'categories', 'locations', 'industries', 'countries', 'featured_jobs'));
}

//  jobs after the search
public function searchresult(Request $request)
{
  $jobs=DB::table('jobposts')->where('jobtitle', 'LIKE', "%{$request->jobtitle}%")->orderBy('created_at', 'desc')->paginate(10);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  
  return view('front.job-searchresult',compact('jobs', 'categories', 'locations', 'industries'));
}

public function filterlocation($name){
  SEOMeta::setTitle('Jobs in'.$name);
  $town_id=Town::where('name',$name)->pluck('id');
  $towns=Town::orderBy('name','asc')->get();
  $categories=jobcategories::orderBy('jobcategories','asc')->get();
  $jobs=Jobposts::whereIn('location',$town_id)->orderBy('created_at', 'desc')->paginate(10);
  $industries=Industry::orderBy('name','asc')->limit(10)->get();
  SEOMeta::setTitle('Jobs in '.$name);

  return view('front.filterlocation')
  ->with('locations',$towns)
  ->with('industries',$industries)
  ->with('jobs',$jobs)
  ->with('categories',$categories);
}

public function showcategory($jobcategories){
  $job_category = ucwords(str_replace('-', ' ', $jobcategories));
  $category=jobcategories::where('jobcategories',$job_category)->pluck('id')->first();
  $cat=jobcategories::where('jobcategories',$job_category)->first();
  $seo_description=jobcategories::where('jobcategories',$jobcategories)->pluck('seo_description')->first();
  $jobs=Jobposts::where('jobcategories_id',$category)->orderBy('created_at', 'desc')->paginate(10);
  $towns=Town::orderBy('name','asc')->get();
  $categories=jobcategories::orderBy('jobcategories','asc')->get();
  $industry=Industry::orderBy('name','asc')->limit(10)->get();
  SEOMeta::setTitle($job_category.' Jobs');
  SEOMeta::setDescription($seo_description);

  return view('front.filtercategory')
  ->with('category',$cat)
  ->with('locations',$towns)
  ->with('jobs',$jobs)
  ->with('industries',$industry)
  ->with('categories',$categories);
}

public function filterindustry($name){
  $ind = ucwords(str_replace('-', ' ', $name));
  $industry_id=Industry::where('name',$ind)->pluck('id')->first();
  $jobs=Jobposts::where('industry',$industry_id)->orderBy('created_at', 'desc')->paginate(10);
  $towns=Town::orderBy('name','asc')->get();
  $categories=jobcategories::orderBy('jobcategories','asc')->get();
  $industry=Industry::orderBy('name','asc')->limit(10)->get();
  SEOMeta::setTitle($ind.' Jobs');

  return view('front.filtercategory')
  ->with('locations',$towns)
  ->with('jobs',$jobs)
  ->with('industries',$industry)
  ->with('categories',$categories);
}

public function register(){
  return view('front.registerpage');
}

    // resume services route
public function resume(){
  $samples = CvUpload::limit(4)->get();

  return view('front.resume-services', compact('samples'));
}

    // resume samples page
public function resumesamples()
{
  $samples = CvUpload::all();

  return view('front.resume-samples', compact('samples'));
}

    // Single resume template
public function singleresume()
{
  return view('front.single-resume');
}

    // function to view the cover letters list
public function coverletter()
{
  return view('front.cover-letter');
}

    // function to view the cvs list
public function cv()
{
  return view('front.cv-templates');
}

public function searchhome(Request $request){
  if($request->industry !== "All Job Industries" && $request->job_category === "All Job Functions" && $request->state === "State/Region")
  {
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $jobs = Jobposts::where('industry', $request->industry)->orderBy('created_at', 'desc')->paginate(12);

    return view('front.search-home', compact('categories', 'locations', 'industries', 'countries', 'jobs'));
  }
  elseif($request->job_category !== "All Job Functions" && $request->industry === "All Job Industries" && $request->state === "State/Region"){
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $jobs = Jobposts::where('jobcategories_id', $request->job_category)->orderBy('created_at', 'desc')->paginate(12);

    return view('front.search-home', compact('categories', 'locations', 'industries', 'countries', 'jobs'));
  }
  elseif($request->state !== "State/Region" && $request->job_category === "All Job Functions" && $request->industry === "All Job Industries"){
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $jobs = Jobposts::where('location', $request->state)->orderBy('created_at', 'desc')->paginate(12);

    return view('front.search-home', compact('categories', 'locations', 'industries', 'countries', 'jobs'));

  }
    //Both Job function and the job industry is selected
  elseif($request->job_category !== "All Job Functions" && $request->industry !== "All Job Industries" && $request->state === "State/Region"){
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $category_jobs = Jobposts::where('jobcategories_id', $request->job_category);
    $jobs = Jobposts::where('industry', $request->industry)->union($category_jobs)->orderBy('created_at', 'desc')->paginate(12);

    return view('front.search-home', compact('categories', 'locations', 'industries', 'countries', 'jobs'));
  }
    //Both Job function and the job location is selected
  elseif($request->job_category !== "All Job Functions" && $request->industry === "All Job Industries" && $request->state !== "State/Region"){
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $category_jobs = Jobposts::where('jobcategories_id', $request->job_category);
    $jobs = Jobposts::where('location', $request->state)->union($category_jobs)->orderBy('created_at', 'desc')->paginate(12);

    return view('front.search-home', compact('categories', 'locations', 'industries', 'countries', 'jobs'));
  }
    //Both Job industry and the job location is selected
  elseif($request->job_category === "All Job Functions" && $request->industry !== "All Job Industries" && $request->state !== "State/Region"){
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $industry_jobs = Jobposts::where('industry', $request->industry);
    $jobs = Jobposts::where('location', $request->state)->union($industry_jobs)->orderBy('created_at', 'desc')->paginate(12);

    return view('front.search-home', compact('categories', 'locations', 'industries', 'countries', 'jobs'));
  }
    //Both Job industry, job function  and the job location are selected
  elseif($request->job_category !== "All Job Functions" && $request->industry !== "All Job Industries" && $request->state !== "State/Region"){
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $industry_jobs = Jobposts::where('industry', $request->industry);
    $category_jobs = Jobposts::where('jobcategories_id', $request->job_category);
    $jobs = Jobposts::where('location', $request->state)->union($industry_jobs)->union($category_jobs)->orderBy('created_at', 'desc')->paginate(12);

    return view('front.search-home', compact('categories', 'locations', 'industries', 'countries', 'jobs'));
  }
}

public function show($id)
{
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  $job = Jobposts::where('id', $id)->first();
  $expirydate=Jobposts::whereIn('deadline',$job)->select(DB::raw('CASE WHEN  DATEDIFF(deadline,curdate())>=0  THEN DATEDIFF(deadline,curdate()) ELSE DATEDIFF(deadline,curdate())=0 END  as days'))->distinct('days')->get();
  $days_to_deadline = Carbon::parse(Carbon::now())->diffInDays($job->deadline);
  $related_jobs=Jobposts::where('jobcategories_id', $job->jobcategories_id)->orderBy('created_at','desc')->limit(5)->get(); 
  $featured=Jobposts::orderBy('created_at','desc')->limit(5)->get();

  // count the number of views
  if($job->viewcount === NULL)
  {
    $job->update(['viewcount' => 0]);
  }

  $job->update(['viewcount' => $job->viewcount + 1]);
  
  SEOMeta::setTitle($job->job_title);

  return view('front.jobview', compact('job', 'expirydate', 'days_to_deadline', 'featured', 'categories', 'locations', 'industries', 'related_jobs'));
} 

public function loginform($id)
{
  $job = Jobposts::where('id', $id)->first();

  return view('front.joblogin', compact('job'));
}

function applyjob(){
  $countries = Country::all();
  $personalinfo = JobseekerDetail::where('user_id', '=', auth()->id())->first();
  $personalstatements = PersonalStatement::where('user_id', '=', auth()->id())->first();
  $experience = WorkExperience::where('user_id', '=', auth()->id())->get();
  $education = Education::where('user_id', '=', auth()->id())->get();
  $awards = Awards::where('user_id', '=', auth()->id())->get();
  $references = Reference::where('user_id', '=', auth()->id())->get();
  $skills = Skills::where('user_id', '=', auth()->id())->get();

  return view('dashboard.prof', compact('countries', 'personalinfo', 'references',
   'personalstatements', 'experience', 'education', 'awards', 'skills'));
}

// Dispaly the government jobs page
public function governmentjobs()
{
  $jobs=Jobposts::where('job_type', 'Government Jobs')->orderBy('created_at', 'DESC')->paginate(12);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  $countries = DB::table('countries')->pluck("name","id");

  return view('front.government-jobs', compact('jobs', 'categories', 'locations', 'industries', 'countries'));
}

// Dispaly the private company jobs page
public function privatejobs()
{
  $jobs=Jobposts::where('job_type', 'Private Company Jobs')->orderBy('created_at', 'DESC')->paginate(12);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  $countries = DB::table('countries')->pluck("name","id");

  return view('front.private-jobs', compact('jobs', 'categories', 'locations', 'industries', 'countries'));
}

// Dispaly the UN jobs page
public function unjobs()
{
  $jobs=Jobposts::where('job_type', 'UN Jobs')->orderBy('created_at', 'DESC')->paginate(12);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  $countries = DB::table('countries')->pluck("name","id");

  return view('front.un-jobs', compact('jobs', 'categories', 'locations', 'industries', 'countries'));
}

// Dispaly the Humanitarian and NGO jobs page
public function humanitarianjobs()
{
  $jobs=Jobposts::where('job_type', 'NGO and Humanitarian Jobs')->orderBy('created_at', 'DESC')->paginate(12);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  $countries = DB::table('countries')->pluck("name","id");

  return view('front.humanitarian-jobs', compact('jobs', 'categories', 'locations', 'industries', 'countries'));
}

// Dispaly the consultancies page
public function consultancies()
{
  $jobs=Jobposts::where('job_type', 'Consultancy')->orderBy('created_at', 'DESC')->paginate(12);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  $countries = DB::table('countries')->pluck("name","id");

  return view('front.consultancies', compact('jobs', 'categories', 'locations', 'industries', 'countries'));
}

//view to upload the cvs
public function uploadcv()
{
  return view('front.upload-cv');
}

public function workprogram()
{
  return view('front.work-program');
}

public function enrollworkreadiness()
{
  $countries = Country::all();

  return view('front.enroll-workprogram', compact('countries'));
}

public function faqs()
{
  SEOMeta::setTitle('Frequently Asked Questions');
  return view('front.faqs');
}
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Companies;
use App\Jobposts;
use App\CvUpload;
use App\Training;
use App\jobcategories;
use App\JobApplication;
use App\Industry;
use App\Locations;
use App\Academics;
use App\Country;
use Mail;
use App\SavedJob;
use DB;
use App\User;
use App\Town;
use App\salary;
use App\Experience;
use App\Procertification;
use App\Skills;
use App\Reference;
use App\JobseekerDetail;
use App\PersonalStatement;
use App\WorkExperience;
use App\Education;
use App\Awards;
use App\Usercategories;
use PDF;
use App;
use App\ProsDetails;
use Carbon\Carbon;
use App\ExpressCategory;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    
        // $this->middleware('guest:user',['except' => ['logout', 'getLogout']]);
  }

//form after the registration by the user
  public function profile()
  {
    $states=Town::orderBy('name','asc')->get();
    $industries=Industry::orderBy('name','asc')->get();
    $countries = Country::all();
    $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
    $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
    $education = Education::where('user_id', '=', auth()->user()->id)->get();
    $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
    $references = Reference::where('user_id', '=', auth()->user()->id)->get();
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();
    $categories = ExpressCategory::orderBy('name','asc')->get();
    
    return view('jobseeker-dashboard.user-profile', compact('countries', 'personalinfo', 'references',
     'personalstatements', 'experience', 'education', 'awards', 'skills', 'states', 'industries', 'categories'));
  }

//wizard form
  public function wizard()
  {
    $states=Town::orderBy('name','asc')->get();
    $industries=Industry::orderBy('name','asc')->get();
    $countries = Country::all();
    $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
    $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
    $education = Education::where('user_id', '=', auth()->user()->id)->get();
    $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
    $references = Reference::where('user_id', '=', auth()->user()->id)->get();
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();
    $categories = ExpressCategory::orderBy('name','asc')->get();
    
    return view('jobseeker-dashboard.profile-wizard', compact('countries', 'personalinfo', 'references',
     'personalstatements', 'experience', 'education', 'awards', 'skills', 'states', 'categories'));
  }

    //create the jobseeker profile
  public function jobseekerprofile()
  {
    $userinfo = User::where('id', auth()->user()->id)->first();
    
    return view('jobseeker-dashboard.jobseekerprofile', compact('userinfo'));
  }

  function profilejourney(){
    $towns=Town::orderBy('name','asc')->get();
    $industries=Industry::orderBy('name','asc')->get();
    $countries = Country::all();
    $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
    $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
    $education = Education::where('user_id', '=', auth()->user()->id)->get();
    $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
    $references = Reference::where('user_id', '=', auth()->user()->id)->get();
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();
    $applications = JobApplication::where('user_id', '=', auth()->user()->id)->get();
    $jobs = Jobposts::orderBy('created_at','desc')->limit(8)->get();
    
    return view('jobseeker-dashboard.prof', compact('countries', 'personalinfo', 'references',
     'personalstatements', 'experience', 'education', 'awards', 'skills', 'towns', 'industries', 'applications', 'jobs'));
  }
  
  public function recommended(){
    $industries=Industry::orderBy('name','asc')->get();
    $locations = Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $user_industries = UserCategories::where('user_id', auth()->user()->id)->get();
    $jobs = Jobposts::orderBy('created_at', 'DESC')->paginate(12);
    
    return view('jobseeker-dashboard.recommended-jobs', compact('industries', 'locations', 'categories', 'user_industries', 'jobs'));
  }
  public function saverecommendedjobs(Request $request){

    $this->validate($request,[
      'industry'=>'required'
    ]); 

    $industry=new Usercategories;
    $industry->user_id=auth()->user()->id;
    $industry->industry_id=$request->input('industry');
    $industry->save();
    return redirect()->back()->with('status','You have successfully added the industry');
  }


//  all jobs available in the database
  public function alljobs(){
    $jobs=Jobposts::where('status', 'active')->orderBy('created_at', 'DESC')->paginate(12);
    $categories = jobcategories::all();
    $locations = Town::all();
    $industries = Industry::all();
    $countries = DB::table('countries')->pluck("name","id");
    $featured_jobs = Jobposts::whereIn('employer_id', [8, 21])->orderBy('created_at', 'DESC')->limit(3)->get();

    return view('jobseeker-dashboard.all-jobs',compact('jobs', 'categories', 'locations', 'industries', 'countries', 'featured_jobs'));
  }


  public function showjob($id)
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

    return view('jobseeker-dashboard.single-job', compact('job', 'expirydate', 'days_to_deadline', 'featured', 'categories', 'locations', 'industries', 'related_jobs'));
  } 

//   public function store(Request $request)
//   {
//         //
//     $this->validate($request,[
//         'cname'=>'required',
//         'cwebsite'=>'required',
//         'location'=>'required',
//         'function'=>'required',
//         'logo'=>'required|image|max:1999',
//     ]);
//     if($request->hasFile('logo')){
//         $filewithext= $request->file('logo')->getClientOriginalName();
//         $filename=pathinfo($filewithext,PATHINFO_FILENAME);
//         $extension=$request->file('logo')->getClientOriginalExtension();
//         $filenametostore=$filename.'_'.time().'.'.$extension;
//         $path=$request->file('logo')->storeAs('public/uploads',$filenametostore);
//     }
//     else{
//         $filenametostore='nologo.jpg';
//     }
//     $data=array(
//         'email'=>$request->email,
//         'cname'=>$request->cname,
//         'location'=>$request->location,
//         'namee'=>$request->namee,
//     );
//     Mail::send('jobseeker-dashboard.email',$data,function ($message) use ($data){
//         $message->to($data['email']);
//         $message->from('info@thenetworkedpros.com');
//         $message->subject('COMPANY ACCOUNT CREATION');
//     });

//     $company= new Companies;
//     $company->user_id=auth()->user()->id;
//     $company->companyname=$request->input('cname');
//     $company->website=$request->input('cwebsite');
//     $company->location=$request->input('location');
//     $company->function=$request->input('function');
//     $company->logo=$filenametostore;
//     $company->contactmail=$request->input('email');
//     $company->save();
//     DB::table('users')
//     ->where('id', auth()->user()->id)
//     ->update(['userlevel' => "1"]);
//     return redirect('/Employer')->with('status','company created successfully');

// }

  public function jobs()
  {
    $industries=Industry::orderBy('name','asc')->get();
    $indacount=Jobposts::join('industries','industries.name','=','jobposts.industry')->whereIn('jobposts.industry',$industries)->get();
    $town=Town::orderBy('name','asc')->get();
    $datediif=Jobposts::select(DB::raw('CASE WHEN  DATEDIFF(expirydate,curdate())>=0  THEN DATEDIFF(expirydate,curdate()) ELSE DATEDIFF(expirydate,curdate())=0 END  as days'))->distinct('days')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $jobs=Jobposts::orderBy('created_at','desc')->get();
    return view('jobseeker-dashboard.jobs')->with('industry',$industries)
    ->with('jobs',$jobs)
    ->with('categories',$categories)
    ->with('towns',$town)
    ->With('indacount',$indacount)
    ->with('datediff',$datediif);
  }

  public function applications()
  { 
    $categories = jobcategories::all();

    return view('jobseeker-dashboard.applications', compact('categories'));
  }

  public function savedjobs()
  {
    $industries=Industry::orderBy('name','asc')->get();
    $locations = Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $jobs = SavedJob::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();

    return view('jobseeker-dashboard.savedjobs', compact('categories', 'locations', 'industries', 'jobs'));
  }

  public function viewjob($id)
  {
    $job = Jobposts::where('id', $id)->first();
    $categories = jobcategories::all();

    return view('jobseeker-dashboard.viewjob', compact('categories', 'job'));
  }

  public function showlocation($name){
    SEOMeta::setTitle('Jobs in'.$name);
    $town_id=Town::where('name',$name)->pluck('id');
    $towns=Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $jobs=Jobposts::whereIn('location',$town_id)->orderBy('created_at', 'desc')->paginate(10);
    $industries=Industry::orderBy('name','asc')->limit(10)->get();
    SEOMeta::setTitle('Jobs in '.$name);

    return view('jobseeker-dashboard.filterlocation')
    ->with('locations',$towns)
    ->with('industries',$industries)
    ->with('jobs',$jobs)
    ->with('categories',$categories);
  }

  public function showcategory($jobcategories){
    SEOMeta::setTitle($jobcategories.' Jobs');
    $category=jobcategories::where('jobcategories',$jobcategories)->pluck('id')->first();
    $jobs=Jobposts::where('jobcategories_id',$category)->orderBy('created_at', 'desc')->paginate(10);
    $towns=Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $industry=Industry::orderBy('name','asc')->limit(10)->get();

    return view('jobseeker-dashboard.filtercategory')
    ->with('locations',$towns)
    ->with('jobs',$jobs)
    ->with('industries',$industry)
    ->with('categories',$categories);
  }

    // method to search for a jobpost on the jobseekerds dashboard immediately after login
  public function jobsearch(Request $request)
  {
    $industries=Industry::orderBy('name','asc')->get();
    $locations = Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();

        //All fields are selected
    if($request->duty !== 'All Job Functions' && $request->location !== 'All Locations' && $request->keyword !== null)
    {
      $duty = $request->duty;
      $location = $request->location;
      $keyword = $request->keyword;
      $results = Jobposts::where('job_title', 'LIKE', '%'.$keyword.'%')
      ->where('location', '=', $location)
      ->where('industry', '=', $duty)
      ->get();
      
      return view('jobseeker-dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //No job keyword
    else if($request->duty !== 'All Job Functions' && $request->location !== 'All Locations' && $request->keyword === null)
    {

      $duty = $request->duty;
      $location = $request->location;
      $results = Jobposts::where('location', '=', $location)
      ->where('industry', '=', $duty)
      ->get();
      
      return view('jobseeker-dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //only the job keyword is provided
    else if($request->duty === 'All Job Functions' && $request->location === 'All Locations' && $request->keyword !== null)
    {

      $keyword = $request->keyword;
      $results = Jobposts::where('job_title', 'LIKE', '%'.$keyword.'%')->get();
      
      return view('jobseeker-dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //Only job function is selected
    else if($request->duty !== 'All Job Functions' && $request->location === 'All Locations' && $request->keyword === null)
    {

      $duty = $request->duty;
      $results = Jobposts::where('industry', '=', $duty)
      ->get();
      
      return view('jobseeker-dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //No job keyword
    else if($request->duty === 'All Job Functions' && $request->location !== 'All Locations' && $request->keyword === null)
    {

      $location = $request->location;
      $results = Jobposts::where('location', '=', $location)
      ->get();
      
      return view('jobseeker-dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //No keyword is provided by the user
    else if($request->duty === 'All Job Functions' && $request->location === 'All Locations' && $request->keyword === null)
    {

      $results = Jobposts::all();
      
      return view('jobseeker-dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }

  }

  public function workReady()
  {
    return view('jobseeker-dashboard.work-readiness');
  }



  public function enrollworkreadiness()
  {
    $countries = Country::all();

    return view('jobseeker-dashboard.enroll-workprogram', compact('countries'));
  }

    // resume samples page
  public function resumeTemplates()
  {
    $samples = CvUpload::all();

    return view('jobseeker-dashboard.resume-samples', compact('samples'));
  }

  public function customizeresume()
  {
    $countries = DB::table('countries')->pluck("name","id");
    $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
    $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
    $education = Education::where('user_id', '=', auth()->user()->id)->get();
    $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
    $references = Reference::where('user_id', '=', auth()->user()->id)->get();
    $skills = Skills::where('user_id', '=', auth()->user()->id)->pluck('skillname');

    return view('jobseeker-dashboard.customize-resume', compact( 'personalinfo', 'references',
      'personalstatements', 'experience', 'education', 'awards', 'skills', 'countries'));
  }

  public function downloadresume($id)
  {
    $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
    $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
    $education = Education::where('user_id', '=', auth()->user()->id)->get();
    $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
    $references = Reference::where('user_id', '=', auth()->user()->id)->get();
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();

    $pdf = PDF::loadView('jobseeker-dashboard.resume', compact('personalinfo', 'personalstatements', 'experience', 'education', 'awards', 'references', 'skills'));
    return $pdf->download('The-NetworkedPros-resume.pdf');
  }

//save jobs by the user
  public function savejob(Request $request, $id)
  {
    SavedJob::create(['user_id' => auth()->user()->id, 'job_id' => $request->id]);

    return back()->with('message', 'The job has been added to the saved jobs successfully');
  }

//Delete the user saved jobs
  public function deletesavejob(Request $request)
  {
   $job = SavedJob::where('id', '=', $request->id)->first();
   $job->delete();

   return back()->with('message', 'The job has been removed from the saved jobs successfully');
 }


// Express Recruitment Page
 public function express()
 {
  dd('hello');
}
}

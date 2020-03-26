<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Companies;
use App\Jobposts;
use App\CvUpload;
use App\Application;
use App\Training;
use App\jobcategories;
use App\Industry;
use App\Events;
use App\Locations;
use App\Academics;
use App\Countrylist;
use Mail;
use App\Assignments;
use DB;
use App\User;
use App\Cprofile;
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
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
        // $this->middleware('guest:user',['except' => ['logout', 'getLogout']]);
    }
    
    public function jobseekerprofile()
    {
        $userinfo = User::where('id', auth()->user()->id)->first();
        
        return view('dashboard.jobseekerprofile', compact('userinfo'));
    }

    function profilejourney(){
        $towns=Town::orderBy('name','asc')->get();
        $industries=Industry::orderBy('name','asc')->get();
        $countries = Countrylist::all();
        $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
        $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
        $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
        $education = Education::where('user_id', '=', auth()->user()->id)->get();
        $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
        $references = Reference::where('user_id', '=', auth()->user()->id)->get();
        $skills = Skills::where('user_id', '=', auth()->user()->id)->get();
        
        return view('dashboard.prof', compact('countries', 'personalinfo', 'references',
         'personalstatements', 'experience', 'education', 'awards', 'skills', 'towns', 'industries'));
    }
    
    public function recommended(){
        $industries=Industry::orderBy('name','asc')->get();
        $locations = Town::orderBy('name','asc')->get();
        $categories=jobcategories::orderBy('jobcategories','asc')->get();
        $user_industries = UserCategories::where('user_id', auth()->user()->id)->get();
        
        return view('dashboard.recommended-jobs', compact('industries', 'locations', 'categories', 'user_industries'));
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

  public function store(Request $request)
  {
        //
    $this->validate($request,[
        'cname'=>'required',
        'cwebsite'=>'required',
        'location'=>'required',
        'function'=>'required',
        'logo'=>'required|image|max:1999',
    ]);
    if($request->hasFile('logo')){
        $filewithext= $request->file('logo')->getClientOriginalName();
        $filename=pathinfo($filewithext,PATHINFO_FILENAME);
        $extension=$request->file('logo')->getClientOriginalExtension();
        $filenametostore=$filename.'_'.time().'.'.$extension;
        $path=$request->file('logo')->storeAs('public/uploads',$filenametostore);
    }
    else{
        $filenametostore='nologo.jpg';
    }
    $data=array(
        'email'=>$request->email,
        'cname'=>$request->cname,
        'location'=>$request->location,
        'namee'=>$request->namee,
    );
    Mail::send('dashboard.email',$data,function ($message) use ($data){
        $message->to($data['email']);
        $message->from('info@thenetworkedpros.com');
        $message->subject('COMPANY ACCOUNT CREATION');
    });

    $company= new Companies;
    $company->user_id=auth()->user()->id;
    $company->companyname=$request->input('cname');
    $company->website=$request->input('cwebsite');
    $company->location=$request->input('location');
    $company->function=$request->input('function');
    $company->logo=$filenametostore;
    $company->contactmail=$request->input('email');
    $company->save();
    DB::table('users')
    ->where('id', auth()->user()->id)
    ->update(['userlevel' => "1"]);
    return redirect('/Employer')->with('status','company created successfully');

}

public function careerprofile(){
    $countries = Countrylist::all();
    $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
    $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
    $education = Education::where('user_id', '=', auth()->user()->id)->get();
    $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
    $references = Reference::where('user_id', '=', auth()->user()->id)->get();
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();

    return view('dashboard.career-profile', compact( 'personalinfo', 'references',
      'personalstatements', 'experience', 'education', 'awards', 'skills', 'countries'));
}

public function jobs()
{
    $industries=Industry::orderBy('name','asc')->get();
    $indacount=Jobposts::join('industries','industries.name','=','jobposts.industry')->whereIn('jobposts.industry',$industries)->get();
    $town=Town::orderBy('name','asc')->get();
    $datediif=Jobposts::select(DB::raw('CASE WHEN  DATEDIFF(expirydate,curdate())>=0  THEN DATEDIFF(expirydate,curdate()) ELSE DATEDIFF(expirydate,curdate())=0 END  as days'))->distinct('days')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $jobs=Jobposts::orderBy('created_at','desc')->get();
    return view('dashboard.jobs')->with('industry',$industries)
    ->with('jobs',$jobs)
    ->with('categories',$categories)
    ->with('towns',$town)
    ->With('indacount',$indacount)
    ->with('datediff',$datediif);
}

public function applications()
{ 
    $categories = jobcategories::all();

    return view('dashboard.applications', compact('categories'));
}

public function savedjobs()
{
    $industries=Industry::orderBy('name','asc')->get();
    $locations = Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();

    return view('dashboard.savedjobs', compact('categories', 'locations', 'industries'));
}

public function viewjob($id)
{
    $job = Jobposts::where('id', $id)->first();
    $categories = jobcategories::all();

    return view('dashboard.viewjob', compact('categories', 'job'));
}

public function showlocation($name){
    $location=Town::where('name',$name)->pluck('id');
    $jobposts=Jobposts::whereIn('location',$location)->get();
    $towns=Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $industry=Industry::orderBy('name','asc')->limit(10)->get();

    return view('dashboard.filterlocation')
    ->with('locations',$towns)
    ->with('jobposts',$jobposts)
    ->with('industries',$industry)
    ->with('categories',$categories);
}

public function showcategory($name){
    $category=jobcategories::where('jobcategories',$name)->pluck('id')->first();
    $jobposts=Jobposts::where('jobcategories_id',$category)->get();
    $towns=Town::orderBy('name','asc')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $gettown=Town::select('name')->where('id',$category)->get();
    $industry=Industry::orderBy('name','asc')->limit(10)->get();

    return view('dashboard.filtercategory')
    ->with('locations',$towns)
    ->with('jobposts',$jobposts)
    ->with('industries',$industry)
    ->with('gettown',$gettown)
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
        $results = Jobposts::where('jobtitle', 'LIKE', '%'.$keyword.'%')
        ->where('location', '=', $location)
        ->where('industry', '=', $duty)
        ->get();
        
        return view('dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //No job keyword
    else if($request->duty !== 'All Job Functions' && $request->location !== 'All Locations' && $request->keyword === null)
    {

        $duty = $request->duty;
        $location = $request->location;
        $results = Jobposts::where('location', '=', $location)
        ->where('industry', '=', $duty)
        ->get();
        
        return view('dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //only the job keyword is provided
    else if($request->duty === 'All Job Functions' && $request->location === 'All Locations' && $request->keyword !== null)
    {

        $keyword = $request->keyword;
        $results = Jobposts::where('jobtitle', 'LIKE', '%'.$keyword.'%')->get();
        
        return view('dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //Only job function is selected
    else if($request->duty !== 'All Job Functions' && $request->location === 'All Locations' && $request->keyword === null)
    {

        $duty = $request->duty;
        $results = Jobposts::where('industry', '=', $duty)
        ->get();
        
        return view('dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //No job keyword
    else if($request->duty === 'All Job Functions' && $request->location !== 'All Locations' && $request->keyword === null)
    {

        $location = $request->location;
        $results = Jobposts::where('location', '=', $location)
        ->get();
        
        return view('dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }
        //No keyword is provided by the user
    else if($request->duty === 'All Job Functions' && $request->location === 'All Locations' && $request->keyword === null)
    {

        $results = Jobposts::all();
        
        return view('dashboard.searchjob', compact('industries', 'locations', 'categories', 'results'));
    }

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
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();

    return view('dashboard.customize-resume', compact( 'personalinfo', 'references',
      'personalstatements', 'experience', 'education', 'awards', 'skills', 'countries'));
}

    //Method to pick the resume theme
public function buildresume(Request $request){
    $attributes = request()->validate([
        'name' => ['required', 'min:3'],
        'email' => 'required',
        'phone' => ['required', 'min:9'],
        'religion' => 'required',
        'country' => 'required',
        'state' => 'required',
        'id_pass' => ['required', 'min:3'],
        'gender' => ['required'],
        'marital_status' => 'required',
        'postal_address' => 'required',
        'postal_code' => 'required',
        'dob' => 'required',
        'employer' => ['required', 'min:3'],
        'position' => ['required', 'min:3'],
        'start_date' => 'required',
        'end_date' => 'required',
        'roles' => ['required', 'min:15'],
        'qualification' => ['required', 'min:3'],
        'score' => 'nullable',
        'institution' => ['required', 'min:3'],
        'level' => 'required',
        'education_start_date' => 'required',
        'grad_date' => 'required',
        'award_name' => ['nullable', 'min:3'],
        'award_institution' => ['nullable', 'min:3'],
        'award_date' => 'nullable',
        'award_description' => ['required', 'min:15'],
        'skill_name' => ['required', 'min:3'],
        'skill_level' => 'required',
        'referee_position' => ['required', 'min:3'],
        'referee_name' => ['required', 'min:3'],
        'phone_number' => ['required', 'min:3'],
        'referee_email' => ['required', 'min:3'],
        'organization' => ['required', 'min:3']
    ]);

   // If there's a jobsekerdetail, update the existing one.
   // If no matching model exists, create one.
    $details = JobseekerDetail::updateOrCreate(
        ['user_id' => auth()->user()->id],
        ['name' => request()->name, 'email' => request()->email, 'phone' => request()->phone, 'religion' => request()->religion, 'nationality' => request()->country, 'city' => request()->state, 'id_pass' => request()->id_pass, 'gender' => request()->gender, 'marital_status' => request()->marital_status, 'dob' => request()->dob, 'postal_code' => request()->postal_code, 'postal_address' => request()->postal_address]
    );

//addition of the first education by the user
    $educated = new Education();
    $educated->qualification = request()->qualification;
    $educated->score = request()->score;
    $educated->institution = request()->institution;
    $educated->level = request()->level;
    $educated->start_date = request()->education_start_date;
    $educated->grad_date = request()->grad_date;
    $educated->user_id = auth()->user()->id;
    $educated->save();

// save the first experience from the user
    $experienced  = new WorkExperience();
    $experienced->user_id = auth()->user()->id;
    $experienced->employer = request()->employer;
    $experienced->position = request()->position;
    $experienced->roles = request()->roles;
    $experienced->start_date = request()->start_date;
    $experienced->end_date = request()->end_date;
    $experienced->save();

//save the first additional work experience
    if(request()->nemployer1 !== null)
    {
        $experienced  = new WorkExperience();
        $experienced->user_id = auth()->user()->id;
        $experienced->employer = request()->nemployer1;
        $experienced->position = request()->position1;
        $experienced->roles = request()->description1;
        $experienced->start_date = request()->start1;
        $experienced->end_date = request()->end_date;
        $experienced->save();
    }

    //save the second additional work experience
    if(request()->nemployer2 !== null)
    {
        $experienced  = new WorkExperience();
        $experienced->user_id = auth()->user()->id;
        $experienced->employer = request()->nemployer2;
        $experienced->position = request()->position2;
        $experienced->roles = request()->description2;
        $experienced->start_date = request()->start2;
        $experienced->end_date = request()->end_date;
        $experienced->save();
    }

//addition of the first award by the user
    $awarded = new Awards();
    $awarded->user_id = auth()->user()->id;
    $awarded->name = request()->award_name;
    $awarded->institution = request()->award_institution;
    $awarded->award_date = request()->award_date;
    $awarded->description = request()->award_description;
    $awarded->save();

//addition of the first skill by the user
    $skilled = new Skills();
    $skilled->user_id = auth()->user()->id;
    $skilled->skillname = request()->skill_name;
    $skilled->level = request()->skill_level;
    $skilled->save();

//addition of the first referee by the user
    $referee = new Reference();
    $referee->user_id = auth()->user()->id;
    $referee->name =  request()->referee_name;
    $referee->position = request()->referee_position;
    $referee->organization = request()->organization;
    $referee->phone = request()->phone_number;
    $referee->email = request()->referee_email;
    $referee->save();

    return redirect('/pick-theme')->with('message', 'Resume Created successfully');
}

public function picktheme()
{
    $personalinfo = JobseekerDetail::where('user_id', '=', auth()->user()->id)->first();
    $personalstatements = PersonalStatement::where('user_id', '=', auth()->user()->id)->first();
    $experience = WorkExperience::where('user_id', '=', auth()->user()->id)->get();
    $education = Education::where('user_id', '=', auth()->user()->id)->get();
    $awards = Awards::where('user_id', '=', auth()->user()->id)->get();
    $references = Reference::where('user_id', '=', auth()->user()->id)->get();
    $skills = Skills::where('user_id', '=', auth()->user()->id)->get();

    return view('dashboard.resume-previews', compact('personalinfo', 'personalstatements', 'experience', 'education', 'awards', 'references', 'skills'));
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

    $pdf = PDF::loadView('dashboard.orbit-template', compact('personalinfo', 'personalstatements', 'experience', 'education', 'awards', 'references', 'skills'));
    return $pdf->download('The-NetworkedPros-resume.pdf');
}
}

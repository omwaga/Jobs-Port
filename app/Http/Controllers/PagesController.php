<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Jobposts;
use App\BlogCategory;
use App\jobcategories;
use App\Locations;
use App\Industry;
use App\Training;
use App\TrainingCategory;
use App\Town;
use App\Jobtype;
use DB;
use Carbon\Carbon;
use Mail;
use App\Countrylist;
use App\Employer;
use App\JobseekerDetail;
use App\PersonalStatement;
use App\WorkExperience;
use App\Education;
use App\Skills;
use App\Reference;
use App\Awards;
use App\Usercategories;
use App\Cprofile;
use App\Companies;
use App\Article;
use App\CvUpload;
use Illuminate\Http\Request;
class PagesController extends Controller
{

  public function cprofile(){
    $industry=Industry::orderBy('name','asc')->get();
    $town=Town::orderBy('name','asc')->get();
    $countries=Countrylist::all();
    
    return view('new.create-employerprofile')->with('industry',$industry)
         ->with('town',$town)
         ->with('countries',$countries);
    }
           
   public function hire(){
        return view('new.Employerlogin');
    }
    
    public function employerd(){
         if(Auth::guard('employer')->check()){
             return redirect()->route('employdashboard');
         }
         else{
        return view('new.empdash');
         }
    }
    
     public function createcompany(Request $request){
      $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'telephone'=>'required',
             'jobtitle'=>'required',
            'address'=>'required',
            'companyname'=>'required',
            'location'=>'required',
            'website'=>'required',
             'cindustry'=>'required',
             'companyemail'=>'required',
             'contactperson'=>'required',
             'csize'=>'required',
             'ctype'=>'required',
             'phonenumber'=>'required|max:15|min:10',
             'ccountry'=>'required',
             'caddress'=>'required',
             'clogo'=>'required',
             'uname'=>'required',
             'pword'=>'required',
            ]);
             if($request->hasFile('clogo')){
    $filewithext= $request->file('clogo')->getClientOriginalName();
    $filename=pathinfo($filewithext,PATHINFO_FILENAME);
    $extension=$request->file('clogo')->getClientOriginalExtension();
    $filenametostore=$filename.'_'.time().'.'.$extension;
    $path=$request->file('clogo')->storeAs('public/uploads',$filenametostore);
    }
    else{
        $filenametostore='noimage.jpg';
    }
     $data=array(
    'email'=>$request->email,
    'firstname'=>$request->firstname,
    'companyname'=>$request->companyname,
    'cindustry'=>$request->cindustry,
    'caddress'=>$request->caddress,
    'companyemail'=>$request->companyemail,
    'contactperson'=>$request->contactperson,
    'telephone'=>$request->telephone,
);
Mail::send('email.companyemail',$data,function ($message) use ($data){
$message->to($data['email']);
$message->from('info@thenetworkedpros.com');
$message->subject('COMPANY ACCOUNT CREATION');
});


            $createprof=new Cprofile;
            $createprof->firstname=$request->input('firstname');
            $createprof->lastname=$request->input('lastname');
            $createprof->cemail=$request->input('email');
             $createprof->jobtitle=$request->input('jobtitle');
            $createprof->postcode=$request->input('password');
            $createprof->phonenumber=$request->input('telephone');
            $createprof->caddress=$request->input('address');
            $createprof->cname=$request->input('companyname');
            $createprof->location=$request->input('location');
            $createprof->website=$request->input('website');
            $createprof->industry=$request->input('cindustry');
            $createprof->email=$request->input('companyemail');
            $createprof->cperson=$request->input('contactperson');
            $createprof->csize=$request->input('csize');
            $createprof->temployer=$request->input('ctype');
            $createprof->telephone=$request->input('phonenumber');
            $createprof->country=$request->input('ccountry');
            $createprof->address=$request->input('caddress');
            $createprof->logo=$filenametostore;
            $createprof->username=$request->input('uname');
            $createprof->password=bcrypt($request->input('pword'));
            $createprof->save();
            return redirect('/employer/login')->with('status','Profile Created Successfully');
    }
        public function createprofile(Request $request){
        $this->validate($request,[
            'cname'=>'required',
            'location'=>'required',
            'website'=>'required',
            'cindustry'=>'required',
            'cemail'=>'required',
            'cperson'=>'required',
            'csize'=>'required',
            'ctype'=>'required',
            'ctel'=>'required |max:12|min:10',
             'ccountry'=>'required',
             'caddress'=>'required',
            ]);
        $cprofiles=new Cprofile;
        $cprofiles->user_id=Auth::guard('employer')->user()->id;
        $cprofiles->cname=$request->input('cname');
        $cprofiles->location=$request->input('location');
        $cprofiles->website=$request->input('website');
        $cprofiles->industry=$request->input('cindustry');
        $cprofiles->email=$request->input('cemail');
        $cprofiles->cperson=$request->input('cperson');
        $cprofiles->csize=$request->input('csize');
        $cprofiles->temployer=$request->input('ctype');
        $cprofiles->telephone=$request->input('ctel');
        $cprofiles->country=$request->input('ccountry');
        $cprofiles->address=$request->input('caddress');
        if (Cprofile::where('email', '=', Input::get('cemail'))->exists()) {
        
   return redirect('/employer')->with('error','Records with such email address already exist.Kindly confirm your email.');
}
else{
        $cprofiles->save();
        return redirect('/Employer-approval')->with('success','company details created successfully pending approval');
} 
    }
    //
    public function homee(){
        $industries=Industry::orderBy('name','asc')->get();
        $categories=jobcategories::orderBy('jobcategories','asc')->get();
        $jobtype=Jobtype::orderBy('name','asc')->get();
        $alljobs=Jobposts::all();
        $jobs=Jobposts::orderBy('created_at','desc')->limit(18)->paginate(6);
        $towns=Town::orderBy('name','asc')->get();
        $company=Cprofile::orderBy('created_at','desc')->limit(6)->get();
        
        return view('new.home')->with('industry',$industries)
        ->with('jobs',$jobs)
        ->with('towns',$towns)
        ->with('companyy',$company)
        ->with('jobtype',$jobtype)
        ->with('alljobs',$alljobs)
        ->with('categories',$categories);
         
    }
  
  public function foremployer()
  {
      return view('new.foremployer');
  }
  
 public function aboutjob(){
    $industries=Industry::orderBy('name','asc')->get();
    $indacount=Jobposts::join('industries','industries.name','=','jobposts.industry')->whereIn('jobposts.industry',$industries)->get();
    $town=Town::orderBy('name','asc')->get();
    $datediif=Jobposts::select(DB::raw('CASE WHEN  DATEDIFF(expirydate,curdate())>=0  THEN DATEDIFF(expirydate,curdate()) ELSE DATEDIFF(expirydate,curdate())=0 END  as days'))->distinct('days')->get();
    $categories=jobcategories::orderBy('jobcategories','asc')->get();
    $jobs=Jobposts::orderBy('created_at','desc')->get();
     return view('new.job')->with('industry',$industries)
     ->with('jobs',$jobs)
     ->with('categories',$categories)
     ->with('towns',$town)
     ->With('indacount',$indacount)
     ->with('datediff',$datediif);
 }
 
//  all jobs available in the database
 public function alljobs(){
  $jobs=DB::table('jobposts')->paginate(10);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  
  return view('new.all-jobs',compact('jobs', 'categories', 'locations', 'industries'));
 }
 
//  jobs after the search
public function searchresult(Request $request)
{
  $jobs=DB::table('jobposts')->where('jobtitle', 'LIKE', "%{$request->jobtitle}%")->paginate(10);
  $categories = jobcategories::all();
  $locations = Town::all();
  $industries = Industry::all();
  
  return view('new.job-searchresult',compact('jobs', 'categories', 'locations', 'industries'));
}

public function filterlocation($name){
        $showlocation=Town::where('name',$name)->first();
        $loccount=Jobposts::whereIn('location',$showlocation)->get()->count();
        $towns=Town::orderBy('name','asc')->get();
        $categories=jobcategories::orderBy('jobcategories','asc')->get();
        $gettown=Town::select('name')->whereIn('id',$showlocation)->get();
        $loc=Jobposts::whereIn('location',$showlocation)->paginate(10);
        $industry=Industry::orderBy('name','asc')->limit(10)->get();
        $cnamee=Cprofile::select('cname')->whereIn('id',$showlocation)->get();
        return view('new.filterlocation')->with('location',$loc)
        ->with('locations',$towns)
        ->with('loccount',$loccount)
        ->with('industries',$industry)
        ->with('company',$cnamee)
        ->with('gettown',$gettown)
        ->with('categories',$categories);
    }

public function showcategory($jobcategories){
        $category=jobcategories::where('jobcategories',$jobcategories)->pluck('id')->first();
        $jobs=Jobposts::where('jobcategories_id',$category)->paginate(10);
        $towns=Town::orderBy('name','asc')->get();
        $categories=jobcategories::orderBy('jobcategories','asc')->get();
        $industry=Industry::orderBy('name','asc')->limit(10)->get();
        
        return view('new.filtercategory')
        ->with('locations',$towns)
        ->with('jobs',$jobs)
        ->with('industries',$industry)
        ->with('categories',$categories);
    }
    
public function filterindustry($name){
        $industry_id=Industry::where('name',$name)->pluck('id')->first();
        $jobs=Jobposts::where('industry',$industry_id)->paginate(10);
        $towns=Town::orderBy('name','asc')->get();
        $categories=jobcategories::orderBy('jobcategories','asc')->get();
        $industry=Industry::orderBy('name','asc')->limit(10)->get();
        
        return view('new.filtercategory')
        ->with('locations',$towns)
        ->with('jobs',$jobs)
        ->with('industries',$industry)
        ->with('categories',$categories);
    }

    public function register(){
        return view('new.registerpage');
    }
     function aboutus(){
           $towns=Town::orderBy('name','asc')->limit(7)->get();
             $industries=Industry::orderBy('name','asc')->limit(7)->get();
        return view('content.aboutus')
         ->with('towns',$towns)
         ->with('industries',$industries);
    }
    
    // resume services route
    public function resume(){
        return view('new.resume-services');
    }
    
    // resume samples page
    public function resumesamples()
    {
        $samples = CvUpload::all();

        return view('new.resume-samples', compact('samples'));
    }
    
    // Single resume template
    public function singleresume()
    {
        return view('new.single-resume');
    }
    
    public function homepage(){
          $training= Training::orderBy('created_at','desc')->paginate(6);
        $jobs=Jobposts::orderBy('created_at','desc')->paginate(6);
        $companies=Companies::orderBy('created_at','desc')->limit(6)->get();
        $towns=Town::orderBy('name','asc')->limit(7)->get();
        $industries=Industry::orderBy('name','asc')->limit(7)->get();
        return view('welcome')->with('jobs',$jobs)
        ->with('training',$training)
        ->with('companies',$companies)
        ->with('towns',$towns)
        ->with('industries',$industries);
    }
    
    public function recruit(){
        return view('content.recruit');
    }
    

    public function careerhub(){
        return view('content.career');
    }
    
    public function organization(){
        $training=Training::orderBy('created_at','desc')->get();
        $trainingc=Training::join('training_categories','trainings.training_categories_id','=','training_categories.id')
        ->select('trainings.*', 'trainings.id as idd')->whereIn('training_categories.id',$training)->get();
        return view ('content.organization',compact(['training','trainingc']));
    }
    function normalsearch(){
        $application=jobposts::all();
        $categories=jobcategories::all();
        $Industry=Industry::all();
        $category= Input::get('search');
        $searchdata=Jobposts::where('jobtitle',$category)->get();
        return view('content.searchview')->with('searchdata',$searchdata)
        ->with('categories',$categories)
        ->with('industries',$Industry);
    }
    
    public function searchhome(){
$getlocation=Input::get('location');
$getindustry=Input::get('industry');
$getjobtype=Input::get('function');
$searchdata=Jobposts::where('industry','LIKE','%'.$getindustry.'%')->where('category','LIKE','%'.$getjobtype.'%')->where('location','LIKE','%'.$getlocation.'%')->get();
return view('content.homesearch',compact(['searchdata']));

    }
        public function searchjobs(){
        $application=jobposts::all();
        $towns=Town::all();
        $categories=jobcategories::all();
        $Industry=Industry::all();
        $category= Input::get('category');
        $industry=Input::get('industry');
        $location=Input::get('location');
        $searchdata=Jobposts::where('category','LIKE','%'.$category.'%')
        ->where('industry','LIKE','%'.$industry.'%')
        ->where('location','LIKE','%'.$location.'%')->get();
        return view('content.searchview')->with('searchdata',$searchdata)
        ->with('categories',$categories)
        ->with('industries',$Industry)
        ->with('applications',$application)
        ->with('towns',$towns);

    }
      public function advanced(){
        $jobs=Jobposts::orderBy('created_at','desc')->limit(5)->get();
        $industry=Industry::orderBy('name','asc')->get();
        $category=jobcategories::orderBy('jobcategories','asc')->get();
        $town=Town::orderBy('name','asc')->get();
        return view('new.advanced')->with('job',$jobs)
        ->with('industry',$industry)
        ->with('category',$category)
        ->with('town',$town);
    }
  public function show($id)
    {
        $job = Jobposts::where('id', $id)->first();
        $expirydate=Jobposts::whereIn('expirydate',$job)->select(DB::raw('CASE WHEN  DATEDIFF(expirydate,curdate())>=0  THEN DATEDIFF(expirydate,curdate()) ELSE DATEDIFF(expirydate,curdate())=0 END  as days'))->distinct('days')->get();
        $featured=Jobposts::orderBy('created_at','desc')->limit(4)->get();

        return view('new.jobview', compact('job', 'expirydate', 'featured'));
    } 
    
 public function showindustry(Request $request,$jobcategories){
$category=jobcategories::where('jobcategories',$jobcategories)->first();
$categories = jobcategories::all();
$locations = Town::all();
$industries = Industry::all();

return view('content.industry', compact('category', 'categories', 'locations', 'industries'));
    }

public function showlocation($name){
        $showlocation=Town::where('name',$name)->first();
        $loccount=Jobposts::whereIn('location',$showlocation)->get()->count();
        $towns=Town::orderBy('name','asc')->get();
        $gettown=Town::select('name')->whereIn('id',$showlocation)->get();
        $loc=Jobposts::whereIn('location',$showlocation)->get();
        $industry=Industry::orderBy('name','asc')->limit(10)->get();
        $cnamee=Cprofile::select('cname')->whereIn('id',$showlocation)->get();
        return view('content.location')->with('location',$loc)
        ->with('towns',$towns)
        ->with('loccount',$loccount)
        ->with('industries',$industry)
        ->with('company',$cnamee)
        ->with('gettown',$gettown);
    }
   
public function loginform($id)
{
    $job = Jobposts::where('id', $id)->first();
    
    return view('content.joblogin', compact('job'));
}

function applyjob(){
        $countries = Countrylist::all();
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
    
//view to upload the cvs
public function uploadcv()
{
    return view('new.upload-cv');
}


// all blog articles
public function fromblog()
{
    $categories = BlogCategory::all();
    $articles = Article::paginate('10');
    
    return view('new.blog-article', compact('articles', 'categories'));
}

// single blog article
public function singleblog($name)
{
    $categories = BlogCategory::all();
    $blog = Article::where('title', $name)->first();
    
    return view('new.blog-articleview', compact('blog', 'categories'));
}

public function leads()
{
    return view('new.employer-lead');
}
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Employer;
use App\Bio;
use App\Jobposts;
use App\Training;
use App\Events;
use App\Companies;
use App\Application;
use App\jobcategories;
use App\Cprofile;
use DB;
use App\User;
use App\salary;
use App\Academics;
use App\Experience;
use App\Procertification;
use App\Skills;
use App\Reference;
use App\Biodata;
use App\Worker;
use App\Profiles;
use App\Talentpool;
use App\Countrylist;
use Mail;
use App\Industry;
use App\Locations;
use App\Town;
class LearningCenterController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth:trainingc');
    }
    public function dashboard(){
        return view('learningdash.content.dashboard');
    }
    public function gettraining(){
        $categories=jobcategories::orderBy('jobcategories','asc')->get();
        $countries=Countrylist::all();
        $traininglocations=Town::orderBy('name','asc')->get();
        return view('learningdash.content.createtraining',compact(['categories','traininglocations','countries']));
    }
     public function addtraining(Request $request)
    {
        $attributes = $this->validate($request,[
            'title'=>['required','min:3'],
            'jobcategories_id'=>'required',
            'town_id'=>'required',
            'short_description'=>['required','min:30'],
            'full_description'=>['required','min:60'],
            'cost'=>'required',
            'sdate'=>'required',
            'edate'=>'required',
        ]);
        
        Training::create($attributes + ['employers_id' => auth()->id()]);
        
         return redirect('/postatraining')->with('status','Your training has been posted successfully');
    }
    public function showtraining($id){
       $trainn=Training::find($id); 
       $training=Training::where('institutions_id',Auth::guard('trainingc')->user()->id)->get();
       return view('learningdash.content.showtraining',compact(['trainn','training']));
    }
    public function getevent(){
    return view('learningdash.content.postevent');
}
 public function postevent(Request $request){
$this->validate($request,[
    'ename'=>'required',
    'edescription'=>'required',
    'elocation'=>'required',
    'ecost'=>'required',
    'esdate'=>'required',
    'eedate'=>'required',
    'eorganized'=>'required', 
]);
$event= new Events;
$event->user_id=Auth::guard('employer')->user()->id;
$event->title=$request->input('ename');
$event->description=$request->input('edescription');
$event->location=$request->input('elocation');
$event->cost=$request->input('ecost');
$event->sdate=$request->input('esdate');
$event->edate=$request->input('eedate');
$event->organizer=$request->input('eorganized');
$event->save();
return redirect('/postevent')->with('status','Your event has been posted successfully');
    }
    public function viewtrainings(){
        $training=Training::where('institutions_id',Auth::guard('trainingc')->user()->id)->get();
        return view('learningdash.content.viewtraining',compact(['training']));
    }
    public function viewevent(){
        $events=Events::where('user_id',Auth::guard('trainingc')->user()->id)->get();
        return view('learningdash.content.getevent',compact(['events']));
    }
}
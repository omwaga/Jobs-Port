<?php

namespace App\Http\Controllers;
use App\Bio;
use App\Companies;
use App\Worker;
use App\Profiles;
use App\Jobposts;
use App\Cvuploads;
use App\Application;
use App\Training;
use App\jobcategories;
use App\Industry;
use App\Events;
use App\salary;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    protected $redirectTo= '/Employer';
    public function homepage(){
        $blogs=Bio::where('user_id','=',auth()->user()->id)->get();
        $companies=Companies::where('user_id','LIKE',auth()->user()->id)->get();
        $jobpos=Jobposts::select('companyname')->get();
        $jposted=Jobposts::where('user_id','LIKE',auth()->user()->id)->get();
        $training=Training::where('user_id','LIKE',auth()->user()->id)->get();
        $applicants=Application::whereIn('company',$jobpos)->get();
        $events=Events::where('user_id','LIKE',auth()->user()->id)->get();
        return view('edashboard.companydash')->with('bio',$blogs)
        ->with('companies',$companies)
        ->with('applics',$applicants)
        ->with('jobposted',$jposted)
        ->with('training',$training)
        ->with('events',$events);
    }
}

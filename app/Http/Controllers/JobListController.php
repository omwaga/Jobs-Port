<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobposts;
use App\jobcategories;
use App\Industry;
use App\Town;

class JobListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
    }
    
    public function index()
    {
        $jobs = Jobposts::where('employer_id',Auth::guard('employer')->user()->id)->get();
        
        return view('empdash.content.jobs', compact('jobs'));
    }
     
    //show view to create a new training
     Public function create(){
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training){  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobposts $jobpost)
    {
        $jobcategory=jobcategories::orderBy('jobcategories','asc')->get();
        $industry=Industry::orderBy('name','asc')->get();
        $towns=Town::orderBy('name','asc')->get();
        
        
      return view('empdash.content.updatejob', compact('jobcategory', 'industry', 'towns', 'jobpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Jobposts $jobpost)
    {
        $jobpost->update(request(['jobtitle','category', 'location','type','industry', 'salary', 'expirydate', 'summary', 'description', 'applicationdet']));
        
        return redirect('/jobposts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobposts $joblist)
    {
        
        $joblist->delete();
        
        return back();
    }
    
        
}

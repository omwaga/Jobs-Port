<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Training;
use App\Bio;
Use App\Events;
use App\jobcategories;
use App\Town;

class EmployerTrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $trainings = Training :: where('employers_id', auth()->id())->get();

        return view('empdash.content.showtrainings', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    //show view to create a new training
     Public function create(){
        $categories = jobcategories::all();
        $traininglocations = Town::all();
        
        return view('empdash.content.createtraining', compact('categories','traininglocations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
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
        
         return redirect('/trainings')->with('status','Your training has been posted successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training){
     return view('empdash.content.showtraining', compact('training'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        $categories = jobcategories::all();
        $traininglocations = Town::all();
        
        return view('empdash.content.edittraining', compact('training', 'categories', 'traininglocations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Training $training)
    {
        $training->update(request()->validate([
            'title' => ['required','min:3'],
            'jobcategories_id' => 'required',
            'town_id' => 'required',
            'short_description' => ['required','min:30'], 
            'full_description' => ['required','min:60'],
            'cost' => 'required', 
            'sdate' => 'required', 
            'edate' => 'required',
            ]));

    	return redirect('/trainings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        $training->delete();

   	    return redirect('/trainings');
    }
    
    public function searchtraining(Request $request)
    {
      $query = $request->search;
        
        $result = Training::where([
            ['title', 'LIKE', '%'.$query.'%'],
            ['employers_id', auth()->id()]
            ])->get();
        
        return view('empdash.content.searchtraining',compact('result'));
    }
        
}

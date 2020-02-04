<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\jobcategories;
use App\Town;
use App\TrainingCategory;
use App\Institution;

class TrainingSeminarsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application trainings and seminars.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = Town::all();
        $categories = TrainingCategory::all();
        $institutions  = Institution::all();
        $latesttraining = Training::latest('created_at')->paginate(15, ['*'],'LatestTraining');
        $trainingpopularity = Training::orderBy('viewcount', 'desc')->paginate(15, ['*'], 'PopularTraining');
        $besttraining = Training::limit(6)->get();
        $training_type = Training::distinct()->get(['training_type']);
        
        return view('content.training', compact('institutions','locations', 'categories', 'latesttraining', 'trainingpopularity', 'besttraining', 'training_type'));
    }
    
    public function showcategory(TrainingCategory $trainingcategory)
    {   
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
        return view('content.showtrainingcategory', compact('trainingcategory', 'categories', 'locations', 'training_type'));
        
    }
    
    public function showtraininglocation(Town $town){
        $locations = Town::withCount('trainings')->get();
        $categories = TrainingCategory::withCount('trainings')->get();
        $training_type = Training::distinct()->get(['training_type']);
        
        return view('content.showtraininglocation',compact('town', 'categories', 'locations', 'training_type'));
        
    }
    
    public function showtraining(Training $training)
    {
        $location = Town::where('id', $training->town_id)->first()->name;
        // $employer = Employer::where('id', $training->employers_id)->first();
        $trainingpopularity = Training::orderBy('viewcount', 'desc')->get();
        
        return view('content.showtraining', compact('training','trainingpopularity', 'location'));
    }
    
    public function searchtraining(Request $request)
    {
        $query = $request->search;
        
        $result = Training::where('title', 'LIKE', '%'.$query.'%')->get();
        $categories = Trainingcategory::withCount('trainings')->get();
        $locations = Town::withCount('trainings')->get();
        $training_type = Training::distinct()->get(['training_type']);
        
        
        return view('content.searchtraining',compact('result','categories','locations','training_type'));

    }
    
    //training filter based on location, provider and typed keyword
    public function search(Request $request)
    {
        //All fields are selected
        if($request->type !== 'Type of Course' && $request->town !== 'Training Location' && $request->subject !== 'Course Subject')
        {
        $type = $request->type;
        $town = $request->town;
        $subject = $request->subject;
        $result = Training::where('training_type', 'LIKE', '%'.$type.'%')
        ->where('town_id', '=', $town)
        ->where('training_categories_id', '=', $subject)
        ->get();
        
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
         
         return view('content.filtertraining', compact('result', 'categories', 'locations', 'training_type'));
        }
        //Type of course is not selected
        else if($request->town !== 'Training Location' && $request->subject !== 'Course Subject' && $request->type === 'Type of Course')
        {
        $town = $request->town;
        $subject = $request->subject;
        $result = Training::where('town_id', '=', $town)
        ->where('training_categories_id', '=', $subject)
        ->get();
        
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
         
         return view('content.filtertraining', compact('result', 'categories', 'locations', 'training_type')); 
        }
        //Training Location is not selected
        else if($request->town === 'Training Location' && $request->subject !== 'Course Subject' && $request->type !== 'Type of Course')
        {
        $type = $request->type;
        $subject = $request->subject;
        $result = Training::where('training_type', 'LIKE', '%'.$type.'%')
        ->where('training_categories_id', '=', $subject)
        ->get();
        
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
         
         return view('content.filtertraining', compact('result', 'categories', 'locations', 'training_type')); 
        }
        //Course Subject is not selected
        else if($request->town !== 'Training Location' && $request->subject === 'Course Subject' && $request->type !== 'Type of Course')
        {
        $type = $request->type;
        $town = $request->town;
        $result = Training::where('training_type', 'LIKE', '%'.$type.'%')
        ->where('town_id', '=', $town)
        ->get();
        
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
         
         return view('content.filtertraining', compact('result', 'categories', 'locations', 'training_type')); 
        }
         //Only Type of Course is selected
        else if($request->town === 'Training Location' && $request->subject === 'Course Subject' && $request->type !== 'Type of Course')
        {
        $type = $request->type;
        $result = Training::where('training_type', 'LIKE', '%'.$type.'%')
        ->get();
        
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
         
         return view('content.filtertraining', compact('result', 'categories', 'locations', 'training_type')); 
        }
        //Only Course Subject is selected
        else if($request->town === 'Training Location' && $request->subject !== 'Course Subject' && $request->type === 'Type of Course')
        {
        $subject = $request->subject;
        $result = Training::where('training_categories_id', '=', $subject)
        ->get();
        
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
         
         return view('content.filtertraining', compact('result', 'categories', 'locations', 'training_type')); 
        }
        //Only training location is selected
        else if($request->town !== 'Training Location' && $request->subject === 'Course Subject' && $request->type === 'Type of Course')
        {
        $town = $request->town;
        $result = Training::where('town_id', '=', $town)
        ->get();
        
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
        
         
         return view('content.filtertraining', compact('result', 'categories', 'locations', 'training_type')); 
        }
    }
    
    public function register(Training $training)
    {
        return view('content.registertraining', compact('training'));
    }
    
    public function trainingtype(Request $request)
    {
        $training_type = $request->training_type;
        $result = Training::where('training_type', '=', $training_type)
        ->get();
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $trainingType = Training::distinct()->get(['training_type']);
        
        return view('content.trainingtype', compact('result', 'categories', 'locations', 'trainingType', 'training_type'));
    }
    
    public function categoryorderby(Request $request)
    {
        $trainingcategory = $request->category;
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
         
        if($request->sortedby === 'latest')
        {
        $result = Training::where('training_categories_id', '=', $trainingcategory)
        ->orderBy('created_at', 'DESC')->get();
        }
        else if($request->sortedby === 'default')
        {
          $result = Training::where('training_categories_id', '=', $trainingcategory)->get();  
        }
        return view('content.sortcategory', compact('result', 'categories','locations','training_type','trainingcategory'));
    }
    
    public function locationorderby(Request $request)
    {
        $traininglocation = $request->location;
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $training_type = Training::distinct()->get(['training_type']);
         
        if($request->sortby === 'latest')
        {
        $result = Training::where('town_id', '=', $traininglocation)
        ->orderBy('created_at', 'DESC')->get();
        }
        else if($request->sortby === 'default')
        {
          $result = Training::where('town_id', '=', $traininglocation)->get();
        }
        
        return view('content.sortlocation', compact('result', 'categories','locations','training_type','traininglocation'));
    }
    
    public function typeorderby(Request $request)
    {
        $training_type = $request->training_type;
        $categories = TrainingCategory::all();
        $locations = Town::all();
        $trainingType = Training::distinct()->get(['training_type']);
        
        if($request->sortedby === 'default')
        {
        $result = Training::where('training_type', '=', $training_type)
        ->get();
        }
        else if($request->sortedby ==='latest')
        {
            $result = Training::where('training_type', '=', $training_type)->OrderBy('created_at', 'DESC')
        ->get();
        }
         return view('content.trainingtype', compact('result', 'categories', 'locations', 'trainingType', 'training_type'));
    }
}

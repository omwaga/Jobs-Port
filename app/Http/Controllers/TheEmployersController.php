<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Employer;
use App\Jobposts;
use App\User;
use App\JobApplication;
use App\Industry;
use App\jobcategories;
use App\Town;
use App\Country;
use DB;

class TheEmployersController extends Controller
{
    // return the dashboard for the super employer
    public function dashboard()
    {
        $employers = Employer::all();
        $jobseekers = User::all();
        $jobs = Jobposts::all();
        $applications = JobApplication::all();

        return view('super-employer.dashboard', compact('employers', 'jobseekers', 'jobs', 'applications'));
    }
    //return the job creatio form for the employer
    public function createjob()
    {
        $industries = Industry::all();
        $categories = jobcategories::all();
        $countries = Country::all();
        $towns = Town::all();
        $employers = Employer::all();

        return view('super-employer.create-job', compact('industries', 'categories', 'countries', 'towns', 'employers'));
    }

//Save the job created by the super employer to the database
    public function savejob(Request $request)
    {
        $attributes = request()->validate([
            'job_title' => ['required', 'min:3'],
            'employer_name' => 'nullable',
            'employer_logo' => 'nullable',
            'job_type' => 'required',
            'employment_type' => 'nullable',
            'jobcategories_id' => 'nullable',
            'industry' => 'nullable',
            'employer_id'=> 'nullable',
            'country_id' => 'nullable',
            'location' => 'nullable',
            'salary' => 'nullable',
            'deadline' => 'nullable',
            'summary' => ['nullable'],
            'description'=> ['required'],
            'application_details' => ['required'],
        ]);

        if ($request->hasFile('employer_logo')) {
            $attributes['employer_logo'] = $request->employer_logo->getClientOriginalName();
            $request->employer_logo->storeAs('public/job_logos', $attributes['employer_logo']);
        }

        Jobposts::create($attributes + ['employer_id' => 1, 'apply' => 'No',]);

        return redirect('/super-employer/all-jobs')->with('message', 'The job post has been created succsefully');
    }

    // return all the registered employers
    public function employers()
    {
        $employers = Employer::paginate(20);

        return view('super-employer.employers', compact('employers'));
    }

    //Load the form to add a new employer
    public function employer()
    {
        $jobcategories = jobcategories::orderBy('jobcategories','asc')->get();
        $industry = Industry::orderBy('name','asc')->get();
        $town = Town::orderBy('name','asc')->get();
        $countries = DB::table('countries')->pluck("name","id");

        return view('super-employer.add-employer',compact('jobcategories', 'industry', 'town', 'countries'));
    }

    //Add a new employer to the databse
    public function addemployer(Request $request)
    {
        $attributes = request()->validate([
          'company_phone_number'=>'nullable',
          'company_address'=>'nullable',
          'company_name'=>'required',
          'state'=>'nullable',
          'company_website'=>'nullable',
          'company_industry'=>'nullable',
          'company_email'=>'nullable',
          'company_size'=>'nullable',
          'employer_type'=>'nullable',
          'country'=>'nullable',
          'company_address'=>'nullable',
          'logo'=>'nullable',
      ]);

        $password = request()->validate([
          'password'=>'nullable',
      ]);

        if ($request->hasFile('logo')) {
          $attributes['logo'] = $request->logo->getClientOriginalName();
          $request->logo->storeAs('public/logos', $attributes['logo']);
      }
      else{
          $attributes['logo'] ='default-logo.png';
      }

      $data=array(
          'email'=>$request->company_email,
          'firstname'=>$request->company_name,
          'company_name'=>$request->companyname,
          'company_industry'=>$request->cindustry,
          'company_address'=>$request->caddress,
          'company_email'=>$request->companyemail,
          'lastname'=>$request->company_name,
          'company_phone_number'=>$request->telephone,
      );

      $user = Employer::create($attributes + ['password' => Hash::make($password['password']), 'username' => $request->company_email]);

      return back()->with('message', 'Employer succsefully created');
  }

    // Update form for the posted job
  public function updateform($id)
  {
    $job = Jobposts::findOrFail($id);
    $industries = Industry::all();
    $categories = jobcategories::all();
    $countries = Country::all();
    $towns = Town::all();
    $employers = Employer::all();

    return view('super-employer.update-job', compact('industries', 'categories', 'countries', 'towns', 'employers', 'job'));
}

    //Update the posted job by the super employer
public function updatejob(Request $request, $id)
{
    $attributes = request()->validate([
        'job_title' => ['required', 'min:3'],
        'employer_name' => 'required',
        'employer_logo' => 'nullable',
        'job_type' => 'nullable',
        'employment_type' => 'nullable',
        'jobcategories_id' => 'nullable',
        'industry' => 'nullable',
        'employer_name'=> 'nullable',
        'country_id' => 'nullable',
        'location' => 'nullable',
        'salary' => 'nullable',
        'deadline' => 'nullable',
        'summary' => 'nullable',
        'description'=> ['nullable'],
        'application_details' => ['required'],
    ]);

    $job = Jobposts::findOrFail($id);

    if ($request->hasFile('employer_logo')) {
        $attributes['employer_logo'] = $request->employer_logo->getClientOriginalName();
        $request->employer_logo->storeAs('public/job_logos', $attributes['employer_logo']);
    }

    Jobposts::where('id', $id)->update([
        'job_title' => $request->job_title,
        'employer_name' => $request->employer_name,
        'employer_logo' => $request->employer_logo,
        'job_type' => $request->job_type,
        'jobcategories_id' => $request->jobcategories_id,
        'industry' => $request->industry,
        'employment_type' => $request->employment_type,
        'country_id' => $request->country_id,
        'location' => $request->location,
        'salary' => $request->salary,
        'deadline' => $request->deadline,
        'summary' => $request->summary,
        'description'=> $request->description,
        'application_details' => $request->application_details,
        'apply' => 'No',
            // 'employer_id' => $request->employer_id
    ]);

    return redirect('/super-employer/all-jobs')->with('message', 'The Job post has been updated successfully');
}

    // deleted posted job
public function deletejob($id)
{
    $job = Jobposts::findOrFail($id);
    $job->delete();

    return back()->with('message', 'The Job Post has been deleted successfully');
}


    //Display all the jobs from the databse posted by the employers
public function jobs()
{
    $vacancies = Jobposts::Orderby('created_at', 'DESC')->paginate(20);

    return view('super-employer.all-jobs', compact('vacancies'));
}

}

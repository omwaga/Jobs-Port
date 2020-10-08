<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Employer;
use App\Industry;
use App\Country;
use App\Town;

class EmployerProfile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employer');
    }
    
    public function edit($id)
    {
    	$company = Employer::findOrFail($id);
    	$industries =  Industry::all();
    	$countries = Country::all();
    	$towns =  Town::all();

    	return view('employer-dashboard.employer-profile', compact('company', 'industries', 'countries', 'towns'));
    }

    public function update(Request $request, $id)
    {
        $company = Employer::findOrFail($id);
        
        if ($request->hasFile('logo')) {
            $request['logo'] = $request->logo->getClientOriginalName();
            $request->logo->storeAs('public/logos', $request['logo']);
        }

        $company->update(request(['company_name', 'employer_type', 'company_phone_number', 'company_email', 'company_website', 'logo', 'company_industry', 'country', 'company_location', 'company_size', 'company_address', 'description']));

        return back()->with('message', 'The company profile has been updated successfully');
    }

    public function updatePassword(Request $request, $id)
    {
        $company = Employer::findOrFail($id);
        
        $attributes = request()->validate([
          'password'=>'required',
          'username'=>'required',
        ]);

        $company->update(['username' => $attributes['username'], 'password' => Hash::make($attributes['password'])]);

        return back()->with('message', 'The company profile has been updated successfully');
    }
}

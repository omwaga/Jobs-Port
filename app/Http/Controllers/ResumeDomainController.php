<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\ResumeDomain;

class ResumeDomainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $domains = ResumeDomain::all();
    
       return view('admin.resume-samplesdomain', compact('domains'));
    }

    public function show($name)
    {
        $domain = ResumeDomain::where('name', $name)->first();

        return view('admin.view-resumedomain', compact('domain'));
    }
    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3']
            ]);
            
        ResumeDomain::create($attributes);
        
        return redirect()->back()->with('message', 'Resume Domain has been created successfully!');
    }
    
    public function update(ResumeDomain $resumedomain)
    {
        $resumedomain->update(request(['name']));

        return redirect('/resumedomains')->with('message', 'Resume Domain has been updated successfully!');
    }

    public function destroy($name)
    {
       $domain_name = ResumeDomain::where('name', $name)->first();

       $domain_name->delete();

       return redirect()->back()->with('message', 'Resume Domain has been deleted successfully!');
    }
}

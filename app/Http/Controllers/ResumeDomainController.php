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
    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3']
            ]);
            
        ResumeDomain::create($attributes);
        
        return back()->withSuccess('The domain has been created successfully');
    }
    
     public function update(Request $request)
    {
    }
}

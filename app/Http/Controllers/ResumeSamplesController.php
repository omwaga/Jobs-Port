<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\ResumeDomain;

class ResumeSamplesController extends Controller
{
    public function index()
    {
       return view('admin.resume-samples');
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        return $request;
    }
    
     public function update(Request $request)
    {
    }
}

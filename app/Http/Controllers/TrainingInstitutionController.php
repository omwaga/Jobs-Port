<?php

namespace App\Http\Controllers;
use App\Institution;
use Illuminate\Http\Request;

class TrainingInstitutionController extends Controller
{
    public function show(Institution $institution)
    {
        return view('content.institutionprofile', compact('institution'));
    }
}

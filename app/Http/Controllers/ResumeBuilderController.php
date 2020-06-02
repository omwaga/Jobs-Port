<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skills;

class ResumeBuilderController extends Controller
{
    public function skills()
    {
    $skills = Skills::where('user_id', '=', auth()->user()->id)->pluck('skillname');	
    }
}

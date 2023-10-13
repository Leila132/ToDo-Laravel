<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Http\Controllers\Controller; 

class IndexController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }
}

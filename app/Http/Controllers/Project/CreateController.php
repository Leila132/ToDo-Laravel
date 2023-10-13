<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Http\Controllers\Controller; 

class CreateController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }
}

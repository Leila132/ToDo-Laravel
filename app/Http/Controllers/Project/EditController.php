<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use App\Http\Controllers\Controller; 

class EditController extends Controller
{
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
}

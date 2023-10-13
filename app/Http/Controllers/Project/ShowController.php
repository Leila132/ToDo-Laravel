<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use App\Http\Controllers\Controller; 
class ShowController extends Controller
{
    public function show(Project $project)
    {
        if ($project->users()->where('user_id', auth()->id())->exists()) {
            $tasks = $project->tasks;
            return view('projects.show', compact('project', 'tasks'));
        }
        abort(403, 'Unauthorized action.');
    }
}

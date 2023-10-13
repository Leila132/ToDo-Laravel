<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Http\Controllers\Controller; 


class DeleteController extends Controller
{
    public function destroy(Project $project)
    {
        $project->users()->detach();
        $project->tasks()->delete();
        $project->delete();
        return redirect()->route('project.index');
    }
}

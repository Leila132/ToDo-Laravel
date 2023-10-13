<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use App\Http\Controllers\Controller; 

class UpdateController extends Controller
{
    public function update(Project $project)
    {
        $data = request()->validate([
            'proj_name' => 'string',
        ]);
        $project->update($data);
        return redirect()->route('project.show', $project->id);
    }
}

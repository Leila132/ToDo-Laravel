<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Http\Controllers\Controller; 

class StoreController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'proj_name' => 'string',
        ]);
        $project = Project::create($data);
        $project->users()->attach(auth()->id());
        return redirect()->route('project.index');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function users()
    {
        return $this->belongsToMany(User::class, 'project_user');
    }
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'project_task');
    }
    protected $table = 'projects';
    protected $guarded = [];
}

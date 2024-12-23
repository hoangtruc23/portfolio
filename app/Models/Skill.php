<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_skills');
    }
}

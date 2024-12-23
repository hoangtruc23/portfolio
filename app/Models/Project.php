<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $filltable = [
        'name',
        'description',
        'thumbnail',
        'video',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'project_skills');
    }
}

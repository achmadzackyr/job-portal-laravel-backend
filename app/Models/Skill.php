<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function seeker_skills()
    {
        return $this->hasMany(SeekerSkill::class);
    }

    public function job_skills()
    {
        return $this->hasMany(JobSkill::class);
    }
}

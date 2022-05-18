<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function job_type()
    {
        return $this->belongsTo(JobType::class);
    }

    public function job_location()
    {
        return $this->belongsTo(JobLocation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function job_activities()
    {
        return $this->hasMany(JobActivity::class);
    }

    public function job_skills()
    {
        return $this->hasMany(JobSkill::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function business_field()
    {
        return $this->belongsTo(BusinessField::class);
    }

    public function company_images()
    {
        return $this->hasMany(CompanyImage::class);
    }
}

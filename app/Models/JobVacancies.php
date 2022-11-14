<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobVacancies extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }

    public function jobApplicants() {
        return $this->hasMany(Job::class);
    }
}

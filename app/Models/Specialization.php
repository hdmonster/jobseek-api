<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialization extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    public function user() {
        return $this->hasMany(User::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function jobs() {
        return $this->hasMany(Job::class);
    }
}

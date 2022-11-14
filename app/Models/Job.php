<?php

namespace App\Models;

use App\Models\JobApplicant;
use App\Models\JobVacancies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    public function specialization() {
        return $this->belongsTo(Specialization::class);
    }

    public function jobVacancies() {
        return $this->hasMany(JobVacancies::class);
    }
}

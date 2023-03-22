<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = [];

    public function survey()
    {
        return $this->hasOne(Survey::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function resultQuestions()
    {
        return $this->hasMany(ResultQuestions::class);
    }
}

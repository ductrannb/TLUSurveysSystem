<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Result extends Model
{
    use HasFactory;
    use SoftDelete;
    
    protected $guarded = [];

    public function survey()
    {
        return $this->hasOne(Survey::class);
    }

    public function resultQuestions()
    {
        return $this->hasMany(ResultQuestions::class);
    }
}

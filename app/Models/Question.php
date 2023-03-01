<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Question extends Model
{
    use HasFactory;
    use SoftDelete;

    protected $guarded = [];

    public function survey()
    {
        return $this->hasOne(Survey::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function correctAnswer()
    {
        return $this->hasOne(CorrectAnswer::class);
    }
}

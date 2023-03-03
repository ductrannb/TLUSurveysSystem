<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResultQuestion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function question()
    {
        return $this->hasOne(Question::class);
    }

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}

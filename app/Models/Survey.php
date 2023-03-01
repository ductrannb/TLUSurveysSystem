<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class SurveyController extends Model
{
    use HasFactory;
    use SoftDelete;

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function questions()
    {
        $this->hasMany(Question::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}

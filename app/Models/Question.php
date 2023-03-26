<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    public function results() {
//        return Result::where('question_id', $this->id)->get();
        return $this->hasMany(ResultQuestion::class);
    }

    public function essay_answers() {
        $essays = ResultQuestion::select('essay_answer', DB::raw('count(*) as count'))
            ->where('question_id', $this->id)
            ->groupBy('essay_answer')
            ->get();
        return $essays;
    }
}

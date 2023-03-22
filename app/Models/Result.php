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

    public function questions()
    {
        return $this->hasMany(ResultQuestion::class);
    }

    public function answersOfQuestion(int $qid)
    {
//        dd($this->id);
        $answer_ids = ResultQuestion::where('result_id',$this->id)->where('question_id', $qid)->pluck('answer_id');
        return $answer_ids;
    }
    public function contentEssay(int $qid)
    {
//        dd($this->id);
        return ResultQuestion::where('result_id',$this->id)->where('question_id', $qid)->pluck('essay_answer')[0];
    }

}

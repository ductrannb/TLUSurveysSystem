<?php

namespace App\Repositories;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerRepository
{
    public function create(array $data)
    {
        return Answer::create($data);
    }

    public function updateOrCreate(array $data)
    {
//        dd($data);
        return Answer::updateOrCreate(['id' => $data['id'], 'question_id' => $data['question_id']], $data);
    }

    public function delete(int $data)
    {
        return Answer::where('id', $data)->delete();
    }
}

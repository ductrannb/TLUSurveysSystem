<?php

namespace App\Repositories;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AnswerRepository
{
    public function create(array $data)
    {
        return Answer::create($data);
    }

    public function updateOrCreate(array $data)
    {
//        dd(Arr::except($data,'content'));

        return Answer::where(['id' => $data['id'], 'question_id' => $data['question_id']])->update($data);
    }

    public function delete(int $data)
    {
        return Answer::where('id', $data)->delete();
    }
}

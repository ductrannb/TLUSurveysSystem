<?php

namespace App\Repositories;

use App\Models\CorrectAnswer;
use Illuminate\Http\Request;

class CorrectAnswerRepository
{
    public function create(array $data)
    {
        return CorrectAnswer::create($data);
    }

    public function updateOrCreate(array $data)
    {
        return CorrectAnswer::updateOrCreate(['id' => $data['id'], 'question_id' => $data['question_id']], $data);
    }

    public function delete(int $data)
    {
        return CorrectAnswer::where('id', $data)->delete();
    }
}

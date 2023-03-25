<?php

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class QuestionRepository
{
    public function create(array $data)
    {
        return Question::create($data);
    }
    public function updateOrCreate(array $data)
    {
        return Question::updateOrCreate(['id'=>$data['id']], Arr::except($data, 'id'));
    }
    public function delete(int $data)
    {
        return Question::where('id', $data)->delete();
    }
}

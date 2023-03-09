<?php

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionRepository
{
    public function create(array $data)
    {
        return Question::create($data);
    }
    public function update(array $data)
    {
        return Question::where('id', $data['id'])->update($data);
    }
    public function delete(int $data)
    {
        return Question::where('id', $data)->delete();
    }
}
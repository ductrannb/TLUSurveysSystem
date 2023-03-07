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

}
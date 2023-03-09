<?php

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Http\Request;

class AnswerRepository
{
    public function create(array $data)
    {
        return Answer::create($data);
    }

}
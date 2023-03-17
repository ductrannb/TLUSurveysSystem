<?php

namespace App\Repositories;

use App\Models\ResultQuestion;
use Illuminate\Http\Request;

class ResultQuestionRepository
{
    public function create(array $data)
    {
        return ResultQuestion::create($data);
    }
}
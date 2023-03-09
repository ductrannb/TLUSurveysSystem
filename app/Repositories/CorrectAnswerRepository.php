<?php

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Http\Request;

class CorrectAnswerRepository
{
    public function create(array $data)
    {
        return CorrectAnswer::create($data);
    }

    public function update(array $data)
    {
        return CorrectAnswer::where('id', $data['id'])->update($data);
    }
    
    public function delete(int $data)
    {
        return CorrectAnswer::where('id', $data)->delete();
    }
}
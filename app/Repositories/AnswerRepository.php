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

    public function update(array $data)
    {
        return Answer::where('id', $data['id'])->update($data);
    }
    
    public function delete(int $data)
    {
        return Answer::where('id', $data)->delete();
    }
}
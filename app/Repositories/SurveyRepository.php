<?php

namespace App\Repositories;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyRepository
{
    public function create(array $data)
    {
        return Survey::create($data);
    }

    public function update(array $data)
    {
        return Survey::where('id', $data['id'])->update($data);
    }
}
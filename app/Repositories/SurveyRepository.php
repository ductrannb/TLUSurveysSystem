<?php

namespace App\Repositories;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyRepository
{
    public function create(array $array)
    {
        return Survey::create($array);
    }
}
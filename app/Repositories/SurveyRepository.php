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

    public function updateOrCreate(array $data)
    {
        return Survey::updateOrCreate(['id' => $data['id']], $data);
    }



    public function find($id) {
        return Survey::find($id);
    }
}

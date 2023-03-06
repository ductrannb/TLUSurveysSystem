<?php

namespace App\Repositories;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultRepository
{
    public function create(array $data)
    {
        return Result::create($data);
    }
}
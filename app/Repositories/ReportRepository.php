<?php

namespace App\Repositories;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportRepository
{
    public function create(array $data)
    {
        return Report::create($data);
    }
}
<?php

namespace App\Services;

use App\Repositories\ReportRepository;

class ReportService
{
    private $report_repo;

    public function __construct(ReportRepository $report_repo)
    {
        $this->report_repo = $report_repo;
    }

    public function create(array $data)
    {
        return $this->report_repo->create($data);
    }

}
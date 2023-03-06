<?php

namespace App\Services;

use App\Repositories\ResultRepository;

class ResultService
{
    private $result_repo;

    public function __construct(ResultRepository $result_repo)
    {
        $this->result_repo = $result_repo;
    }

    public function create(array $data)
    {
        return $this->result_repo->create($data);
    }

}
<?php

namespace App\Services;

use App\Repositories\ResultQuestionRepository;

class ResultQuestionService
{
    private $result_question_repo;

    public function __construct()
    {
        $this->result_question_repo = new ResultQuestionRepository();
    }

    public function create(array $data)
    {
        return $this->result_question_repo->create($data);
    }

}
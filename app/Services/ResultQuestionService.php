<?php

namespace App\Services;

use App\Repositories\ResultQuestionRepository;

class ResultQuestionService
{
    private $result_question_repo;

    public function __construct(ResultQuestionRepository $result_question_repo)
    {
        $this->result_question_repo = $result_question_repo;
    }

    public function create(array $data)
    {
        return $this->result_question_repo->create($data);
    }

}
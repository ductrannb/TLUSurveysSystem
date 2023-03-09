<?php

namespace App\Services;

use App\Repositories\QuestionRepository;

class QuestionService
{
    private $question_repo;

    public function __construct(QuestionRepository $question_repo)
    {
        $this->question_repo = $question_repo;
    }

    public function create(array $data)
    {
        return $this->question_repo->create($data);
    }

    public function update(array $data)
    {
        return $this->question_repo->update($data);
    }
    public function delete(int $data)
    {
        return $this->question_repo->delete($data);
    }
}
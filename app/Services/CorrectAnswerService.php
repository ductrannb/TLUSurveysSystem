<?php

namespace App\Services;

use App\Repositories\CorrectAnswerRepository;

class CorrectAnswerService
{
    private $correct_answer_repo;

    public function __construct()
    {
        $this->correct_answer_repo = new CorrectAnswerRepository();
    }

    public function create(array $data)
    {
        return $this->correct_answer_repo->create($data);
    }

    public function updateOrCreate(array $data)
    {
        return $this->correct_answer_repo->updateOrCreate($data);
    }

    public function delete(int $data)
    {
        return $this->correct_answer_repo->delete($data);
    }
}

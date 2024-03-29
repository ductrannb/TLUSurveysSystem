<?php

namespace App\Services;

use App\Repositories\AnswerRepository;

class AnswerService
{
    private $answer_repo;

    public function __construct()
    {
        $this->answer_repo = new AnswerRepository();
    }

    public function create(array $data)
    {
        return $this->answer_repo->create($data);
    }

    public function updateOrCreate(array $data)
    {
        return $this->answer_repo->updateOrCreate($data);
    }

    public function delete(int $data)
    {
        return $this->answer_repo->delete($data);
    }
}

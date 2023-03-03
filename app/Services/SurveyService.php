<?php

namespace App\Services;

use App\Repositories\SurveyRepository;

class SurveyService
{
    private $survey_repo;

    public function __construct(SurveyRepository $survey_repo)
    {
        $this->survey_repo = $survey_repo;
    }

    public function create(array $data)
    {
        return $this->survey_repo->create($data);
    }
}
<?php

namespace App\Services;
use Illuminate\Support\Arr;
use App\Repositories\ResultRepository;

class ResultService
{
    private $result_repo;
    private $result_ques_service;

    public function __construct(ResultRepository $result_repo)
    {
        $this->result_repo = $result_repo;
        $this->result_ques_service = new ResultQuestionService();
    }

    public function create(array $data)
    {
        $data_result = [
            'survey_id' => $data['survey_id'],
            'fullname' => $data['fullname'],
            'student_id' => $data['student_id'],
            'email' => $data['email']
        ];

        $result = $this->result_repo->create($data_result);

        if(Arr::exists($data, 'choice_answer')){
            foreach(array_keys($data['choice_answer']) as $question_id) {
                $this->result_ques_service->create(array(
                   'result_id' => $result->id,
                   'question_id' => $question_id,
                   'answer_id' => $data['choice_answer'][$question_id],
                   'essay_answer' => ''));
            }
        }

        if(Arr::exists($data, 'multi_answer')){
            foreach(array_keys($data['multi_answer']) as $question_id) {
                foreach(array_keys($data['multi_answer'][$question_id]) as $answer_id){
                    $this->result_ques_service->create(array(
                        'result_id' => $result->id,
                        'question_id' => $question_id,
                        'answer_id' => $answer_id,
                        'essay_answer' => ''));
                }
                }
            }
        
        if(Arr::exists($data, 'essay_answer')){
            foreach(array_keys($data['essay_answer']) as $question_id) {
                $this->result_ques_service->create(array(
                    'result_id' => $result->id,
                    'question_id' => $question_id,
                    'answer_id' => '0',
                    'essay_answer' => $data['essay_answer'][$question_id]));
            }
            }

        return $result;

    }
}
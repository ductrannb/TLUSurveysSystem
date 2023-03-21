<?php

namespace App\Services;

use App\Repositories\QuestionRepository;

class QuestionService
{
    private $question_repo;
    private $answer_service;
    private $correct_answer_service;

    public function __construct()
    {
        $this->question_repo = new QuestionRepository();
        $this->answer_service = new AnswerService();
        $this->correct_answer_service = new CorrectAnswerService();
    }

    public function create(array $data, array $answers, array $correct_answers)
    {
        $question = $this->question_repo->create($data);
        $answer_ids = array_keys($answers);
        $correct_answer_ids = array_keys($correct_answers);

        foreach ($answer_ids as $answer_id) {
            $data_answer = array('id'=>$answer_id, 'question_id'=>$question->id, 'content'=>$answers[$answer_id]);
            $this->answer_service->create($data_answer);
        }

        foreach ($correct_answer_ids as $correct_answer_id) {
            $this->correct_answer_service->create(['question_id'=>$question->id, 'answer_id'=>$correct_answer_id]);
        }
        return $question;
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

<?php

namespace App\Services;

use App\Repositories\SurveyRepository;
use Illuminate\Support\Arr;

class SurveyService
{
    private $survey_repo;
    private  $question_service;

    public function __construct(SurveyRepository $survey_repo)
    {
        $this->survey_repo = $survey_repo;
        $this->question_service = new QuestionService();
    }

    public function create(array $data)
    {
        $survey = $this->survey_repo->create(Arr::only($data, array('user_id', 'name', 'start_at', 'end_at', 'type')));
        $questions = $data['questions'];
        $types = $data['types'];
        $answers = $data['answers'];
        $correct_answers = $data['correct_answers'] == null ? [] : $data['correct_answers'];
        $question_ids = array_keys($questions);
        foreach ($question_ids as $question_id) {
            $type_question = $types[$question_id];
            $essay_correct_answer = ($type_question == 1 || $type_question == 2 || $survey->type == 0) ? '' : $correct_answers[$question_id][0];
            $data_create_question = array(
                'survey_id' => $survey->id,
                'content' => $questions[$question_id],
                'type' => $types[$question_id],
                'essay_correct_answer' => $essay_correct_answer
            );
            $answers_data = [];
            $correct_answers_data = [];
            if ($type_question == 1 || $type_question == 2) {
                $answers_data = $answers[$question_id];
                $correct_answers_data = $correct_answers[$question_id];
            }
            $question = $this->question_service->create($data_create_question, $answers_data, $correct_answers_data);
        }
        return $survey;
    }

    public function updateOrCreate(array $data)
    {
//        dd($data);
        $data_survey = Arr::only($data, array('id', 'user_id', 'name', 'start_at', 'end_at', 'type'));
        $survey = $this->survey_repo->updateOrCreate($data_survey);
        $questions = $data['questions'];
        $types = $data['types'];
        $answers = $data['answers'];
        $correct_answers = $survey->type == 0 ? [] : $data['correct_answers'];
        $question_ids = array_keys($questions);
        foreach ($question_ids as $question_id) {
            $type_question = $types[$question_id];
            $essay_correct_answer = ($type_question == 1 || $type_question == 2 || $survey->type == 0) ? '' : $correct_answers[$question_id][0];
            $data_create_question = array(
                'id' => $question_id,
                'survey_id' => $survey->id,
                'content' => $questions[$question_id],
                'type' => $types[$question_id],
                'essay_correct_answer' => $essay_correct_answer
            );
            $answers_data = [];
            $correct_answers_data = [];
            if ($type_question == 1 || $type_question == 2) {
                $answers_data = $answers[$question_id];
                $correct_answers_data = $survey->type == 0 ? [] : $correct_answers[$question_id];
            }
//            dd ($answers_data);
            $question = $this->question_service->updateOrCreate($data_create_question, $answers_data, $correct_answers_data);
        }
        return redirect()->route('home');
    }

    public function find($id) {
        return $this->survey_repo->find($id);
    }
}

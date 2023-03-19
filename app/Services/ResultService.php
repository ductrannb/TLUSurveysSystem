<?php

namespace App\Services;
use App\Models\CorrectAnswer;
use App\Models\Question;

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
        $type = $data['survey_type'];
        $diem = 10/$data['total_question'];
        $tongdiem = 0;

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
                if($type == 1){
                    $corrat = CorrectAnswer::where('question_id','=',$question_id)->where('answer_id','=',$data['choice_answer'][$question_id])->first();
                    if($corrat != null){
                        $tongdiem += $diem;
                    };
                }
            }
        }

        if(Arr::exists($data, 'multi_answer')){
            foreach(array_keys($data['multi_answer']) as $question_id) {
                $answer_correct = 0;
                $n = 0;
                foreach(array_keys($data['multi_answer'][$question_id]) as $answer_id){
                    $n++;
                    $this->result_ques_service->create(array(
                        'result_id' => $result->id,
                        'question_id' => $question_id,
                        'answer_id' => $answer_id,
                        'essay_answer' => ''));
                    if($type == 1){
                        $corrat = CorrectAnswer::where('question_id','=',$question_id)->where('answer_id','=',$answer_id)->first();
                        if($corrat != null){
                            $answer_correct++;
                        };
                    }
                }
                if($answer_correct == $n){
                    $tongdiem += $diem;
                }
            }
            
        }
        
        if(Arr::exists($data, 'essay_answer')){
            foreach(array_keys($data['essay_answer']) as $question_id) {
                $this->result_ques_service->create(array(
                    'result_id' => $result->id,
                    'question_id' => $question_id,
                    'answer_id' => '0',
                    'essay_answer' => trim($data['essay_answer'][$question_id])));
                if($type == 1){
                    $corrat = Question::where('id','=',$question_id)->where('essay_correct_answer','=',trim($data['essay_answer'][$question_id]))->first();
                    if($corrat != null){
                        $tongdiem += $diem;
                    };
                }
            }
        }

        $result->update(['score'=>$tongdiem]);
        $result->save();
            
        return $result;

    }
}
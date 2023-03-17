<?php

namespace App\Http\Controllers;

use App\Models\ResultQuestion;
use Illuminate\Http\Request;
use App\Services\ResultQuestionService;
use App\Services\ResponseService;


class ResultQuestionController extends Controller
{
    private $result_question_service;
    private $response;

    public function __construct(ResultQuestionService $result_question_service, ResponseService $response)
    {
        $this->result_question_service = $result_question_service;
        $this->response= $response;
    }

    public function index(Request $request)
    {
        return 'result question';
    }

    public function create(Request $request)
    {
        dd($request);
        try {
            $this->result_question_service->create($request->only('result_id','question_id','answer_id','essay_answer'));
            return $this->response->success('create result_question success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}


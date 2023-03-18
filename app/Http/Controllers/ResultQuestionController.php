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

    public function create(array $data)
    {
        // dd($request);
        try {
            $result = $this->result_question_service->create($request->all());
            return redirect()->route('report',['survey_id'=>$result->survey_id]);
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuestionController extends Controller
{
    private $question_service;
    private $response;

    public function __construct(QuestionService $question_service, ResponseService $response)
    {
        $this->question_service = $question_service;
        $this->response= $response;
    }

    public function create(Request $request)
    {
        try {
            $this->question_service->create($request->only('survey_id','content','type','essay_correct_answer'));
            return $this->response->success('create question success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}

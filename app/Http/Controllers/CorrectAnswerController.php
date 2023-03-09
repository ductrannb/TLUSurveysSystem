<?php

namespace App\Http\Controllers;

use App\Models\CorrectAnswer;
use App\Services\CorrectAnswerService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CorrectAnswerController extends Controller
{
    private $correct_answer_service;
    private $response;

    public function __construct(CorrectAnswerService $correct_answer_service, ResponseService $response)
    {
        $this->correct_answer_service = $correct_answer_service;
        $this->response= $response;
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                'question_id' => 'required',
                'content' => 'required'
            ]);

            $this->correct_answer_service->create($request->only('question_id','content'));
            return $this->response->success('create CorrectAnswer success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
                'question_id' => 'required',
                'content' => 'required',
            ]);
            $correct_answer = CorrectAnswer::findOrFail($request->id);

            $this->correct_answer_service->update($request->only('question_id','content'));

            return $this->response->success('updated CorrectAnswer success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }

    public function delete(int $id)
    {
        try {

            $correct_answer = CorrectAnswer::findOrFail($id);

            $this->correct_answer_service->delete();

            return $this->response->success('delete CorrectAnswer success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}

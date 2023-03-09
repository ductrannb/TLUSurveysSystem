<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Services\AnswerService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnswerController extends Controller
{
    private $answer_service;
    private $response;

    public function __construct(AnswerService $answer_service, ResponseService $response)
    {
        $this->answer_service = $answer_service;
        $this->response= $response;
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                'question_id' => 'required',
                'content' => 'required'
            ]);

            $this->answer_service->create($request->only('question_id','content'));
            return $this->response->success('create answer success !');
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
            $answer = Answer::findOrFail($request->id);

            $this->answer_service->update($request->only('question_id','content'));

            return $this->response->success('updated answer success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }

    public function delete(int $id)
    {
        try {

            $answer = Answer::findOrFail($id);

            $this->answer_service->delete();

            return $this->response->success('delete answer success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}

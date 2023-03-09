<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Services\QuestionService;
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
            $request->validate([
                'content' => 'required',
                'type' => 'required'
            ]);

            $this->question_service->create($request->only('survey_id','content','type','essay_correct_answer'));
            return $this->response->success('create question success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
                'content' => 'required',
                'type' => 'required',
                'essay_correct_answer'
            ]);
            $question = Question::findOrFail($request->id);

            $this->question_service->update($request->only('content','type','essay_correct_answer'));

            return $this->response->success('updated question success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }

    public function delete(int $id)
    {
        try {

            $question = Question::findOrFail($id);

            $this->question_service->delete();

            // Question::destroy($id);

            return $this->response->success('delete Question success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}

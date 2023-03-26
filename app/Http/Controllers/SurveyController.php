<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Services\SurveyService;
use App\Services\ResponseService;

use App\Models\Survey;


class SurveyController extends Controller
{
    private $survey_service;
    private $response;

    public function __construct(SurveyService $survey_service, ResponseService $response)
    {
        $this->middleware('auth');
        $this->survey_service = $survey_service;
        $this->response = $response;
    }

    public function index()
    {
        return view('new_surveys', ['user_id' => auth()->id()]);
    }

    public function viewDetail(Request $request)
    {
        $survey = $this->survey_service->find($request->id);
//        dd($survey->scores());
        $questions = $survey->questions;
        $arr = [];
        foreach ($questions as $question) {
            $results = $question->results;
            $data = [];
            $type = abs($question->type);
            if ($type == 1 || $type == 2) {
                foreach ($question->answers as $answer) {
                    $value =  $answer->id;
                    $count = $this->counter($results, $value, $type);
                    if ($count > 0) {
                        $data[] = ['content' => $answer->content, 'number' => $count];
                    }
                }
            } else {

                $data = $question->essay_answers();
//                dd($data);
            }
            $arr[] = ['question_id' => $question->id, 'type' => $type, 'data' => $data];
        }
//        dd(json_encode($arr));
        return view('survey_item',
            ['survey' => $survey, 'arr_data' => json_encode($arr), 'scores' => $survey->scores()]);
    }

    private function counter($results, $answer_id, $type)
    {
        //type 0: trac nghiem, 1: tu luan
        $count = 0;
        foreach ($results as $result) {
            if ($result->answer_id == $answer_id && ($type == 1 || $type == 2)) {
                $count++;
            } else {
                if ($result->essay_answer == $answer_id && ($type == 3 || $type == 4)) {
                    $count++;
                }
            }
        }
        return $count;
    }

    public function create(Request $request)
    {
        // dd($request);
        try {
            $request->validate([
                'user_id' => 'required',
                'name' => 'required',
                'start_at' => 'date',
                'end_at' => 'date|after:start_at',
                'type' => 'integer',
            ]);

            $survey = $this->survey_service->create($request->all());

            return redirect()->route('survey.view', ['id' => $survey->id]);
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }

    public function updateOrCreate(Request $request)
    {
//        try {
        $request->validate([
            'id' => 'required',
            'user_id' => 'required',
            'name' => 'required',
            'start_at' => 'date',
            'end_at' => 'date|after:start_at',
            'type' => 'integer',
        ]);

        $survey = $this->survey_service->updateOrCreate($request->all());

        return $survey;
//        } catch (\Throwable $throw) {
//            return $this->response->error($throw->getMessage());
//        }
    }

    public function delete(Request $request)
    {
        $survey = Survey::find($request->survey_id);
        if ($survey->user_id == auth()->id()) {
            $survey->delete();
            return redirect()->route('home');
        }
    }

    public function viewReport(Request $request)
    {
        $survey = Survey::find($request->survey_id);
        return view('view_report')->with(['survey' => $survey]);
    }

    public function viewSurvey(Request $request)
    {
        $survey = $this->survey_service->find($request->id);

    }
}

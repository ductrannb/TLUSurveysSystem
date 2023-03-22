<?php

namespace App\Http\Controllers;

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
        $this->response= $response;
    }

    public function index()
    {
        return view('new_surveys');
    }

    public function viewDetail(Request $request)
    {
        return view('view_survey');
    }

    public function create(Request $request)
    {
//        dd($request);
//        try {
            $request->validate([
                'user_id' => 'required',
                'name' => 'required',
                'start_at' => 'date',
                'end_at' => 'date|after:start_at',
                'type' => 'integer',
            ]);

            $this->survey_service->create($request->all());

            return $this->response->success('create survey success !');
//        } catch (\Throwable $throw) {
//            return $this->response->error($throw->getMessage());
//        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
                'user_id' => 'required',
                'name' => 'required',
                'start_at' => 'date',
                'end_at' => 'date|after:start_at',
                'type' => 'integer',
            ]);
            $survey = Survey::findOrFail($request->id);

            $this->survey_service->update($request->only('id' ,'name', 'start_at', 'end_at', 'type'));

            return $this->response->success('updated survey success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }

    public function delete(Request $request){
        $survey = Survey::find($request->survey_id);
        if($survey->user_id == auth()->id() ){
            $survey -> delete();
            return redirect()->route('home');
        }

    }

    public function viewReport(Request $request)
    {
        $survey = Survey::find($request->survey_id);
        return view('view_report')->with(['survey'=>$survey]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\ResultQuestion;
use Illuminate\Http\Request;
use App\Services\ResultService;
use App\Services\ResponseService;

use App\Models\Result;

class ResultController extends Controller
{
    private $result_service;
    private $response;

    public function __construct(ResultService $result_service, ResponseService $response)
    {
        $this->result_service = $result_service;
        $this->response= $response;
    }

    public function index(Request $request)
    {
        $survey = Survey::find($request->survey_id);
        return view('contactform')->with(['survey'=>$survey]);
    }

    public function create(Request $request)
    {
        // try {
            $result = $this->result_service->create($request->all());
            return redirect()->route('report',['survey_id'=>$result->survey_id,'result_id'=>$result->id]);
        // } catch (\Throwable $throw) {
        //     return $this->response->error($throw->getMessage());
        // }
    }
}

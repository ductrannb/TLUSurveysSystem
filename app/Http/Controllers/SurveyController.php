<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SurveyService;
use App\Services\ResponseService;

class SurveyController extends Controller
{
    private $survey_service;
    private $response;

    public function __construct(SurveyService $survey_service, ResponseService $response)
    {
        $this->middleware('auth:api');
        $this->survey_service = $survey_service;
        $this->response= $response;
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required',
                'name' => 'required',
                'start_at' => 'date',
                'end_at' => 'date|after:start_at',
                'type' => 'integer',
            ]);

            $this->survey_service->create($request->only('user_id', 'name', 'start_at', 'end_at', 'type'));

            return $this->response->success('create survey success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }
    }
}

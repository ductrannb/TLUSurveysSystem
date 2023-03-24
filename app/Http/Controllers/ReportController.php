<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use App\Services\ReportService;
use App\Services\ResponseService;

use App\Models\Report;

class ReportController extends Controller
{
    private $report_service;
    private $response;

    public function __construct(ReportService $report_service, ResponseService $response)
    {
        $this->report_service = $report_service;
        $this->response = $response;
    }


    public function index()
    {
        $survey = Survey::find(request('survey_id'));
        return view('responseform')->with(['survey' => $survey, 'result_id' => request('result_id')]);
    }

    public function create(Request $request)
    {
        try {
            // dd($request);
            $this->report_service->create($request->only('survey_id', 'result_id', 'content'));
            return redirect()->back()->with('create_report_success', 'successfully !');
        } catch (\Throwable $throw) {
            return redirect()->back()->with('fail_create_report', 'Failed !');
        }
    }
}
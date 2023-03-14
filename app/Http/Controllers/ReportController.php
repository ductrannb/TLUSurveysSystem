<?php

namespace App\Http\Controllers;

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
        $this->response= $response;

    }


    public function index(){
        return view('responseform');
    }

    public function create(Request $request)
    {
        try {
            $this->report_service->create($request->only('user_id', 'content'));
            return $this->response->success('create report success !');
        } catch (\Throwable $throw) {
            return $this->response->error($throw->getMessage());
        }

    }
}

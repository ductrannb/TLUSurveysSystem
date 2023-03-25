<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\ResultQuestion;
use Illuminate\Http\Request;
use App\Services\ResultService;
use App\Services\ResponseService;
use App\Exports\ResultExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Result;
use App\Models\User;

use Barryvdh\DomPDF\Facade\Pdf;

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

    public function download(Request $request) {
        $result = Result::find($request->id);
//        dd($result);
        $survey = Survey::find($result->survey_id);
//        dd($result->answersOfQuestion(14));
//        foreach ($result->questions as $questiont) {
//            dd($questiont);
//        }
        $filename = $result->fullname . '.pdf';
        $pdf = Pdf::loadView('view_result', ['result'=>$result, 'survey'=>$survey]);
        return $pdf->download($filename);
//        return view('view_result', ['result'=>$result, 'survey'=>$survey]);

//        $view = view('view_result', ['result'=>$result, 'survey'=>$survey]);
//        $html = mb_convert_encoding($view, 'HTML-ENTITIES', 'UTF-8');
//        $html_decode = html_entity_decode($html);
//        $pdf = Pdf::loadHTML($view)
//            ->setPaper('a4', 'landscape')
//            ->setWarnings(false)
//            ->setOptions(['isFontSubsettingEnabled' => true]);
//
//        // Store pdf file in the server
//        return $pdf->download('element_list.pdf');
    }



    public function export(int $id)
    {
        $survey_id = $id;
        $file_name = Survey::find($id)->name;
        return (new ResultExport)->get_by_survey_id($survey_id)->download( $file_name . '.xlsx');
    }

    public function checkResult(Request $request)
    {
        $result = Result::find($request->id);
        $survey = Survey::find($result->survey_id);
        if(User::find($request->user_id) == null)
            $is_user = 0;
        else
            $is_user = 1;
        return view('check_result',['result'=>$result, 'survey'=>$survey,'is_user'=>$is_user]);
    }
}

<?php

namespace App\Exports;

use App\Models\Result;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class ResultExport implements FromQuery,WithMapping,WithHeadings,ShouldAutoSize
{
    use Exportable;

    public function get_by_survey_id(int $survey_id)
    {
        $this->survey_id = $survey_id;
        return $this;
    }


    public function query()
    {
        return Result::query()->where('survey_id','=', $this->survey_id);
    }

    public function headings(): array {
        return [
            'Họ tên',
            'Mã sinh viên',
            'Email',    
            "Điểm",
            
        ];
    }
 
    public function map($result): array {
        return [
            $result->fullname,
            $result->student_id,
            $result->email,
            $result->score
        ];
    }
}

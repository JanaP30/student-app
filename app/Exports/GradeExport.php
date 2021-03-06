<?php

namespace App\Exports;

use App\Models\Grade;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GradeExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Grade::all();
    }

    public function headings(): array
    {
        return [
            
            'Student_id',
            'Subject_id',
            'Grade'
        ];
    }
    public function map($row): array
    {
        return [
           $row->student_id,
           $row->subject_id,
           $row->grade
          
        ];
    }








}

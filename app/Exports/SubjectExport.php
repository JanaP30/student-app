<?php

namespace App\Exports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubjectExport implements FromCollection, WithHeadings,  WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subject::all();
    }

    public function headings(): array
    {
        return [
            
            'subjectName',
            'Teacher',
            'LastName',
            'Literature'
            
        ];
    }
    public function map($row): array
    {
        return [
           $row->subjectName,
           $row->teacher->firstName,
           $row->teacher->secondName,
           $row->literature
          
        ];
    }












}

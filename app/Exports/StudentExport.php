<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, WithHeadings,  WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }


    public function headings(): array
    {
        return [
            
            'cne',
            'FirstName',
            'SecondName',
            'Age',
            'Specialty'
        ];
    }
    public function map($row): array
    {
        return [
           $row->cne,
           $row->firstName,
           $row->secondName,
           $row->age,
           $row->speciality
        ];
    }
   
}

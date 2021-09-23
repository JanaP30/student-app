<?php

namespace App\Exports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeacherExport implements FromCollection, WithHeadings,  WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Teacher::all();
    }
    public function headings(): array
    {
        return [
            
            'FirstName',
            'SecondName',
            'Email',
            'Gender'
            
        ];
    }
    public function map($row): array
    {
        return [
           
           $row->firstName,
           $row->secondName,
           $row->email,
           $row->gender
          
        ];
    }








}

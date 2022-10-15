<?php

namespace App\Exports;

use App\Models\Student;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.students', [
            'students' => Student::all()
        ]);
    }

//    public function collection()
//    {
//        return Student::all();
//    }
}

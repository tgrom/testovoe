<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Students extends Controller
{
    public function index()
    {
        $students = $this->getStudents();

        return view('students', [

                'studentsList' => $students

        ]);
    }

    public function show(int $id)
    {
        return view('showstudents', [
            'students' => $this->getStudents($id)
        ]);
    }
}

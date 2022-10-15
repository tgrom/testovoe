<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'user_family'     => $row[1],
            'user_name'       => $row[2],
            'email'           => $row[3],
            'country'         => $row[4],
            'city'            => $row[5],
            'login'           => $row[6],
            'pass'            => $row[7],
        ]);
    }
}

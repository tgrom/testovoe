<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;


class StudentsImport implements ToModel, WithValidation
{
    public function rules(): array
    {
        return [
            '2' => 'unique:students,email',
            '5' => 'unique:students,login'
        ];
    }
    public function customValidationAttributes()
    {
        return ['2' => 'E-mail',
                '5' => 'Логин'];
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'user_family'     => $row[0],
            'user_name'       => $row[1],
            'email'           => $row[2],
            'country'         => $row[3],
            'city'            => $row[4],
            'login'           => $row[5],
            'pass'            => $row[6],
        ]);
    }
}

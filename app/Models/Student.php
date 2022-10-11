<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";

    public function getStudents(): array
    {
      return  DB::table($this->table)->
      select("id", "user_family", "user_name", "email", "country", "city", "login", "password")
          ->get()->toArray();

    }

    public function getStudentsById(int $id)
    {
      return DB::table($this->table)->find($id);
    }
}

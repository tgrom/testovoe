<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";



    protected $fillable = [
        'user_family',
        'user_name',
        'email',
        'country',
        'city',
        'login',
        'pass'
    ];


}

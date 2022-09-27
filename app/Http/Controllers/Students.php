<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Students extends Controller
{
    public function index(): void
    {
        dump($this->getStudents());
    }

    public function show(int $id): void
    {
        echo "Пользователь с id: {$id}";
    }
}

<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getStudents(): array
    {
        $faker = Factory::create('Ru_RU');

        $data = [];
        for ($i = 0; $i < 11; $i++) {
            $data[] = [

                'user_family' => $faker->firstName(),
                'user_name' => strtok($faker->Name(),' '),
                'email' => $faker->email(),
                'country' => 'Российская Федерация',
                'city' => $faker->city(),
                'login' => $faker->userName(),
                'password' => $faker->randomNumber(8, true)

            ];
        }
        return $data;
    }
}

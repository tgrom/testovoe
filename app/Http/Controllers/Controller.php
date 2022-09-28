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

    public function getStudents(?int $id = null): array
    {
        $faker = Factory::create('Ru_RU');
        if ($id) {
            return [
                'id' => $id,
                'user_family' => $faker->firstName(),
                'user_name' => strtok($faker->Name(),' '),
                'email' => $faker->email(),
                'country' => 'Российская Федерация',
                'city' => $faker->city(),
                'login' => $faker->userName(),
                'password' => $faker->randomNumber(8, true)

            ];
        }

        $data = [];
        for ($i = 1; $i < 11; $i++) {
            $new = explode(' ',$faker->Name());
            //var_dump($new);
            $data[] = [


                'id' => +$i,
                //'user_family' => $faker->firstName(),
                //'user_name' => strtok($faker->Name(),' '),
                //'user_name' => $new[0] .' '. $new[2],
                'user_family' => $new[0],
                'user_name' => $new[1] .' '. $new[2],
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

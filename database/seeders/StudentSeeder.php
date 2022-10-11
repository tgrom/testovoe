<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert($this->getData());


    }

    private function getData(): array
    {


        $faker = Factory::create('Ru_RU');

        $data = [];
        for ($i = 1; $i < 11; $i++) {
            $new = explode(' ',$faker->Name());

            $data[] = [




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

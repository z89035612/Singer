<?php

use App\Singer;
use Illuminate\Database\Seeder;

class SingersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('zh_TW');
        //Singer::truncate();

        Singer::create([
            'Singer' => '3',
            'Age' => '5',
            'sex' => 'm',
            'Ifo' => $faker->name,
            'image' => 't',
        ]);
    }
}

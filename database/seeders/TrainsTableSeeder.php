<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $new_train = new Train();
            $new_train->agency= $faker->company();
            $new_train->departure_station= $faker->city();
            $new_train->arrival_station= $faker->city();
            $new_train->departure_time= $faker->time();
            $new_train->arrival_time= $faker->time();
            $new_train->train_code= $faker->bothify('?#####');
            $new_train->carriages= $faker->numberBetween(1,9);
            $new_train->in_time= $faker->numberBetween(0,1);
            $new_train->save();
        }
    }
}

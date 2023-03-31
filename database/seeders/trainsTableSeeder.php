<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 100; $i++) {
            $new_train = new Train;
            
            $new_train->company = $faker->randomElement(["Trenitalia", "Frecciarossa", "Italo"]);
            $new_train->departure_station = randomElement(["Reggio Calabria Centrale", "Milano Centrale", "Roma Termini"]);
            $new_train->arrival_station = randomElement(["Reggio Calabria Centrale", "Milano Centrale", "Roma Termini"]);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numerify("Treno-numero-###");
            $new_train->carriages = rand(2, 7);
            $new_train->on_time = $faker->boolean(60);
            $new_train->cancelled = $faker->boolean(10);
            
            $new_train->save();
        }

    }
}
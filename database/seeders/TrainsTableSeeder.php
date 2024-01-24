<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $trains = [
        //     [
        //         "company" => "Frecciarossa",
        //         "departure_station" => "Milano",
        //         "arrival_station" => "Bologna",
        //         "departure_time" => "2024-02-02 10:23:30",
        //         "arrival_time" => "2024-02-02 01:03:30",
        //         "train_code" => "8343",
        //         'carriages_tot' => "14",
        //         "on_time" => "1",
        //         "delayed" => "0",
        //     ]

        // ];

        // foreach ($trains as $train) {
        //     $nuovoTreno = new Train();
        //     $nuovoTreno->company = $train["company"];
        //     $nuovoTreno->departure_station = $train["departure_station"];
        //     $nuovoTreno->arrival_station = $train["arrival_station"];
        //     $nuovoTreno->departure_time = $train["departure_time"];
        //     $nuovoTreno->arrival_time = $train["arrival_time"];
        //     $nuovoTreno->train_code = $train["train_code"];
        //     $nuovoTreno->on_time = $train["on_time"];
        //     $nuovoTreno->carriages_tot = $train["carriages_tot"];
        //     $nuovoTreno->delayed = $train["delayed"];
        //     $nuovoTreno->save();
        // };

        for ($i = 0; $i < 10; $i++) {
            $nuovoTreno = new Train();
            $nuovoTreno->company = $faker->words(2, true);
            $nuovoTreno->departure_station = $faker->city();
            $nuovoTreno->arrival_station = $faker->city();
            $nuovoTreno->departure_time = $faker->dateTimeThisYear();
            $nuovoTreno->arrival_time = $faker->dateTimeThisYear();
            $nuovoTreno->train_code = $faker->randomNumber(4, true);
            $nuovoTreno->carriages_tot = $faker->randomNumber(2, false);
            $nuovoTreno->on_time = $faker->boolean();
            $nuovoTreno->delayed = $faker->boolean();
            $nuovoTreno->save();
        }
    }
}

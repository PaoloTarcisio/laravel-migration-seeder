<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Collegamento al model Train
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();
        $train->Company = fake()->company();
        $train->Departure_Station = fake()->city();
        $train->Arrival_Station = fake()->city();
        $train->Departure_Time = fake()->time();
        $train->Arrival_Time = fake()->time();
        $train->Train_Code = fake()->unique()->regexify('[A-Z0-9]{8}');
        $train->Train_Carriages = rand(2, 10);
        $train->On_Time = fake()->boolean(80);
        $train->Deleted = fake()->boolean(15);
        $train->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();

        $newTrain->company = "Thomas&Co";
        $newTrain->departure = "Sodor";
        $newTrain->arrival = "Knapford";
        $newTrain->departure_time = "2024-04-12 17:00:00";
        $newTrain->arrival_time = "2024-04-12 19:30:00";
        $newTrain->train_code = "384hf94";
        $newTrain->carriage_number = 9;
        $newTrain->is_it_on_time = true;
        $newTrain->is_cancelled = false;

        $newTrain->save();
    }
}

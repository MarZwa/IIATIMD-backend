<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise')->insert([
            'workout_id' => 1,
            'name' => "JM Press",
            'reps' => 10,
            'rest_sets' => 1,
            'rest_exercise' => 60,
        ]);

        DB::table('exercise')->insert([
            'workout_id' => 1,
            'name' => "Decline bench press",
            'reps' => 10,
            'rest_sets' => 60,
            'rest_exercise' => 120,
        ]);

        DB::table('exercise')->insert([
            'workout_id' => 1,
            'name' => "Tricep kickbacks",
            'reps' => 12,
            'rest_sets' => 60,
            'rest_exercise' => 90,
        ]);

        DB::table('exercise')->insert([
            'workout_id' => 2,
            'name' => "Incline arnold chest press",
            'reps' => 10,
            'rest_sets' => 60,
            'rest_exercise' => 120,
        ]);

        DB::table('exercise')->insert([
            'workout_id' => 2,
            'name' => "Chest fly",
            'reps' => 8,
            'rest_sets' => 30,
            'rest_exercise' => 60,
        ]);

        DB::table('exercise')->insert([
            'workout_id' => 2,
            'name' => "Bench press",
            'reps' => 8,
            'rest_sets' => 90,
            'rest_exercise' => 120,
        ]);
    }
}

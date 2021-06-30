<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function workouts()
    {
        $workouts = \App\Models\Workout::all();
        return $workouts;
    }

    public function show($id)
    {
        $workout = \App\Models\Workout::find($id);
        return $workout;
    }

    public function exercises($id)
    {
        $exercises = \App\Models\Workout::find($id)->myExercises;
        return $exercises;
    }
}

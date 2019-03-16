<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Run;

class ExercisesController extends Controller
{
    public function create()
	{
		$userExercises = DB::table('runs')->where('user_id', '=', 0)->get();

		return view('exercises.create', ['userExercises' => $userExercises]);
	}

	public function store(Request $request)
	{
		$run = new Run();
		$run->user_id = 0;
		$run->date = $request->input('date');
		$run->distance = $request->input('distance');
		$run->hours = $request->input('hours');
		$run->minutes = $request->input('minutes');
		$run->save();

		$userExercises = DB::table('runs')->where('user_id', '=', 0)->get();

		return view('exercises.submitted', ['userExercises' => $userExercises]);
	}
}

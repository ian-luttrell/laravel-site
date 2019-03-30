<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Run;

class ExercisesController extends Controller
{

	public function index()
	{
		$userExercises = DB::table('runs')->where('user_id', '=', 0)->get();

		return view('exercises.index', ['userExercises' => $userExercises]);
	}


	public function show(Run $exercise)
	{
		return view('exercises.show', ['exercise' => $exercise]);
	}

	
    public function create()
	{
		return view('exercises.create', []);
	}


	public function store(Request $request)
	{
		request()->validate([
					'date' => ['date', 'required'],
					'location' => ['min:5', 'required'],
					'distance' => ['numeric', 'min:0', 'required'],
					'hours' => ['integer', 'min:0', 'required'],
					'minutes' => ['integer', 'min:0', 'required']
		]);

		$run = new Run();
		$run->user_id = 0;
		$run->date = $request->input('date');
		$run->location = $request->input('location');
		$run->distance = $request->input('distance');
		$run->hours = $request->input('hours');
		$run->minutes = $request->input('minutes');
		$run->save();

		$userExercises = DB::table('runs')->where('user_id', '=', 0)->get();

		return view('exercises.index', ['userExercises' => $userExercises]);
	}

	
	public function destroy(Run $exercise)
	{
		$exercise->delete();

		$userExercises = DB::table('runs')->where('user_id', '=', 0)->get();

		return view('exercises.index', ['userExercises' => $userExercises]);
	}

}

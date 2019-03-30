<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Run;

class ExercisesController extends Controller
{

	private static function get_mpm($hours, $minutes, $miles)
	{
		$totalMinutes = $hours * 60 + $minutes;
		
		$minPerMile = $totalMinutes / $miles;

		return $minPerMile;
	}


	private static function format_mpm($minPerMile)
	{
		$minutes = (int)$minPerMile;

		$seconds = 60 * ($minPerMile - $minutes);

		if ( $seconds < 10 ) {
			$seconds = '0' . number_format($seconds, 0);
		} else {
			$seconds = number_format($seconds, 0);
		}
		
		return number_format($minutes, 0) . ':' . $seconds;
	}


	private static function get_mph($hours, $minutes, $miles)
	{
		return $miles / ( $hours + ($minutes / 60) );
	}



	public function index()
	{
		$userExercises = DB::table('runs')->where('user_id', '=', 0)->get()->toArray();

		$exerciseInfo = [
			
			'exercises' => $userExercises,

			'minPerMile' => array_map(function($arr) {
									return static::format_mpm(
												static::get_mpm(
													$arr->hours,
													$arr->minutes,
													$arr->distance
													   )
													 );
								}, $userExercises),

			'milesPerHour' => array_map(function($arr) {
									return number_format(
												static::get_mph(
													$arr->hours,
													$arr->minutes,
													$arr->distance
												  ), 2);
								}, $userExercises)
		
		];


		return view('exercises.index', ['exerciseInfo' => $exerciseInfo]);
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

		return $this->index();
	}

	
	public function destroy(Run $exercise)
	{
		$exercise->delete();

		$userExercises = DB::table('runs')->where('user_id', '=', 0)->get();

		return $this->index();
	}

}

@extends('layouts.template')

@section('title')
Exercise Tracker: Show Exercise
@endsection

@section('content')
	<form method="POST" action= {{ url('/exercises/delete/'.$exercise->id) }} >
		@csrf

		<button class="submit-button">Delete Exercise</button>
	
	</form>

	<br><br>

	<table>

		<tr>
			<th>Date</th>
			<th>Location</th>
			<th>Distance (miles)</th>
			<th>Hours</th>
			<th>Minutes</th>
			<th>Min / Mile</th>
			<th>Miles / Hour</th>
		</tr>
				
		<tr>
			<td> {{ $exercise->date }} </td>
			<td> {{ $exercise->location }} </td>
			<td> {{ $exercise->distance }} </td>
			<td> {{ $exercise->hours }} </td>
			<td> {{ $exercise->minutes }} </td>
			<td> {{ number_format( ($exercise->hours * 60 + $exercise->minutes) / $exercise->distance, 1) }} </a></td>
			<td> {{ number_format($exercise->distance / ( $exercise->hours + $exercise->minutes / 60), 1) }} </a></td>
		</tr>

	</table>


@endsection

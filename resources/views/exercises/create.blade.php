@extends('layouts.template')

@section('title')
Exercise Tracker: Record Exercise
@endsection

@section('content')
<style>
	th, td {
    	border: 1px solid black;
		width: 1px;
	}
</style>

<form method="POST" action="/record-exercise">
	{{ csrf_field() }}
	<table>
		<tr>
			<th>Date</th>
			<th>Distance (miles)</th> 
			<th>Hours</th>
			<th>Minutes</th>
		</tr>

		
		<tr>
		<td><input type="text" name="date" required></td>
		<td><input type="text" name="distance" required></td>
		<td><input type="text" name="hours" required></td>
		<td><input type="text" name="minutes" required></td>
		</tr>
	</table>
	<br>
	<button type="submit">Done</button>
</form>

<br><br>

<table>

	<tr>
		<th>Date</th>
		<th>Distance (miles)</th>
		<th>Hours</th>
		<th>Minutes</th>
	</tr>

	@foreach ($userExercises as $exercise)			
		<tr>
			<td><a class="table-link" href="/">{{ $exercise->date }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->distance }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->hours }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->minutes }}</a></td>
    	</tr>
	@endforeach

</table>

@endsection

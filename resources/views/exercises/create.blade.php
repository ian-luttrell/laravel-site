@extends('layouts.template')

@section('title')
Exercise Tracker: Record Exercise
@endsection

@section('content')

<form method="POST" action="/exercises">
	{{ csrf_field() }}
	<table>
		<tr>
			<th>Date</th>
			<th>Location</th>
			<th>Distance (miles)</th> 
			<th>Hours</th>
			<th>Minutes</th>
		</tr>

		
		<tr>
		<td><input type="text" name="date" required></td>
		<td><input type="text" name="location" required></td>
		<td><input type="text" name="distance" required></td>
		<td><input type="text" name="hours" required></td>
		<td><input type="text" name="minutes" required></td>
		</tr>
	</table>
	
	<br>

	<button class="submit-button" type="submit">Done</button>
</form>

@endsection

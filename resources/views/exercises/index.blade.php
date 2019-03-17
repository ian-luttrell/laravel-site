@extends('layouts.template')

@section('title')
Exercise Tracker: Record Exercise
@endsection

@section('content')

<a class="plain-link" href="/exercises/create"><span class="link-button">Add New Exercise</span></a>

<br><br><br>

<table>

	<tr>
		<th>Date</th>
		<th>Location</th>
		<th>Distance (miles)</th>
		<th>Hours</th>
		<th>Minutes</th>
	</tr>

	@foreach ($userExercises as $exercise)			
		<tr>
			<td><a class="table-link" href="/">{{ $exercise->date }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->location }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->distance }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->hours }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->minutes }}</a></td>
    	</tr>
	@endforeach


</table>

@endsection
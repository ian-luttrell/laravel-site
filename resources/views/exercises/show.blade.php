@extends('layouts.template')

@section('title')
Exercise Tracker: Show Exercise
@endsection

@section('content')



<br><br><br>

	<table>

		<tr>
			<th>Date</th>
			<th>Location</th>
			<th>Distance (miles)</th>
			<th>Hours</th>
			<th>Minutes</th>
		</tr>
			
		<tr>
			<td><a class="table-link" href="/">{{ $exercise->date }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->location }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->distance }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->hours }}</a></td>
			<td><a class="table-link" href="/">{{ $exercise->minutes }}</a></td>
		</tr>

	</table>


@endsection

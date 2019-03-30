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
		<td><input type="text" name="date" required value="{{ old('date') }}"></td>
		<td><input type="text" name="location" required value="{{ old('location') }}"></td>
		<td><input type="text" name="distance" required value="{{ old('distance') }}"></td>
		<td><input type="text" name="hours" required value="{{ old('hours') }}"></td>
		<td><input type="text" name="minutes" required value="{{ old('minutes') }}"></td>
		</tr>
	</table>
	
	<br>

	<button class="submit-button" type="submit">Done</button>


	<br>


	@if ($errors->any())

		<ul style="list-style-type: none; background-color: rgba(150, 0, 0, .50); border-radius: 10px; padding: 20px;">
		
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach

		</ul>

	@endif

</form>

@endsection

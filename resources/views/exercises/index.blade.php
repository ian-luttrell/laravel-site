@extends('layouts.template')


@section('title')

Exercise Tracker: Record Exercise

@endsection


@section('content')


	<a class="plain-link" href="/exercises/create"><span class="link-button">Add New Exercise</span></a>

	<br><br><br>

	@if ($userExercises->count() > 0)

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

			@foreach ($userExercises as $exercise)
			
				<tr>
					<td><a class="table-link" href= {{ url('/exercises/'.$exercise->id) }} >
						{{ $exercise->date }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'.$exercise->id) }} >
						{{ $exercise->location }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'.$exercise->id) }} >
						{{ $exercise->distance }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'.$exercise->id) }} >
						{{ $exercise->hours }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'.$exercise->id) }} >
						{{ $exercise->minutes }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'.$exercise->id) }} >
						{{ strval((int) ( ($exercise->hours * 60 + $exercise->minutes) / $exercise->distance ))
							. ":" .
						   strval( number_format (
								  60 * (
									      ($exercise->hours * 60 + $exercise->minutes) / $exercise->distance
									      - (int) ( ($exercise->hours * 60 + $exercise->minutes) / $exercise->distance )
									   )
								  , 0)
								 )
						}} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'.$exercise->id) }} >
						{{ number_format($exercise->distance / ( $exercise->hours + $exercise->minutes / 60), 1) }} </a></td>
				</tr>

			@endforeach

		</table>

	@else

		You have no exercises to show. Add one with the button above.

	@endif


@endsection

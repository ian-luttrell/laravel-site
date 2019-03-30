@extends('layouts.template')


@section('title')

Exercise Tracker: Record Exercise

@endsection


@section('content')


	<a class="plain-link" href="/exercises/create"><span class="link-button">Add New Exercise</span></a>

	<br><br><br>

	@if ( sizeof($exerciseInfo['exercises']) > 0 )

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

			@for ($i = 0; $i < sizeof($exerciseInfo['exercises']); $i++)
			
				<tr>
					<td><a class="table-link" href= {{ url('/exercises/'. $exerciseInfo['exercises'][$i]->id) }} >
						{{ $exerciseInfo['exercises'][$i]->date }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'. $exerciseInfo['exercises'][$i]->id) }} >
						{{ $exerciseInfo['exercises'][$i]->location }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'. $exerciseInfo['exercises'][$i]->id) }} >
						{{ $exerciseInfo['exercises'][$i]->distance }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'. $exerciseInfo['exercises'][$i]->id) }} >
						{{ $exerciseInfo['exercises'][$i]->hours }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'. $exerciseInfo['exercises'][$i]->id) }} >
						{{ $exerciseInfo['exercises'][$i]->minutes }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'. $exerciseInfo['exercises'][$i]->id) }} >
						{{ $exerciseInfo['minPerMile'][$i] }} </a></td>
					<td><a class="table-link" href= {{ url('/exercises/'. $exerciseInfo['exercises'][$i]->id) }} >
						{{ $exerciseInfo['milesPerHour'][$i] }} </a></td>
				</tr>

			@endfor

		</table>

	@else

		You have no exercises to show. Add one with the button above.

	@endif


@endsection

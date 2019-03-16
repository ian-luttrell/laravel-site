@extends('layouts.template')

@section('title')
Exercise Tracker: Submitted
@endsection

@section('content')
Successfully recorded an exercise.

<br><br>

<ul>
@foreach ($userExercises as $exercise)
	<li>{{ $exercise->distance }}</li>
@endforeach
</ul>

@endsection

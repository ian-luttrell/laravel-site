@extends('layouts.template')

@section('title')
Exercise Tracker: Login
@endsection

@section('content')
Log in here.
<br><br>
<form method="POST" action="/login">
	{{ csrf_field() }}
	Username <input type="text" name="username" required>
	<br>
	Password <input type="password" name="password" required>
	<br><br>
	<button class="submit-button" type="submit">Log In</button>
</form>
@endsection

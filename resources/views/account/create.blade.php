@extends('layouts.template')

@section('title')
Exercise Tracker : Create Account
@endsection

@section('content')
Create an account here.
<br><br>
<form method="POST" action="create-account">
	{{ csrf_field() }}
	Username <input type="text" name="username" required>
	<br>
	Password <input type="password" name="password" required>
	<br><br>
	<button type="submit">Create Account</button>
</form>
@endsection


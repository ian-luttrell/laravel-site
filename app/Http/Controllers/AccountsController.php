<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AccountsController extends Controller
{
    public function create()
	{
		return view('account.create', []);
	}

	public function store(Request $request)
	{
		$username = $request->input('username');
		$password = $request->input('password');
		$user = new User;
		$user->name = $username;
		$user->password = Hash::make($password);
		$user->save();
		
		return view('account.submit', compact('username'));
	}
}

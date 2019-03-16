<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    public function create()
	{
		return view('account.login', []);
	}

	public function store(Request $request)
	{
		$cand_username = $request->input('username');
		$cand_password = $request->input('password');

		$users = User::all();
		foreach ($users as $user)
		{
			if ($user->name == $cand_username)
			{
				if (Hash::check($cand_password, $user->password))
				{
					$username = $user->name;
					return view('account.logged_in', compact('username'));
				}
			}
		}
		return view('account.failed_login', []);
	}
}

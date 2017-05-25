<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('guest');
	// }

	public function index()
	{
		return view('login');
	}

    public function login(Request $request)
	{
		$this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ]);
		//dd($request);
		if (Auth::attempt(['nrp' => $request->username,'password' => $request->password,])) {
			if (Auth::user()->roles_id == "1") {
				return redirect('/pemandu');
			}
			else if (Auth::user()->roles_id == "2") {
				return redirect('/oc');
			}
			else if (Auth::user()->roles_id == "3") {
				return redirect('/peserta');
			}
		}
		else {
			return redirect('/')->with('error', 'Username atau password tidak ditemukan');
		}
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/');
	}
}
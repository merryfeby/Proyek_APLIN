<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
	public $timestamps = false;
	function register(Request $req) {
		$new_user = new User;
		
		$new_user->username = $req->username;
		$new_user->password = $req->password;
		$new_user->email = $req->email;
		$new_user->telp = $req->phone;

		$new_user->save();

		return redirect('/');
	}
}

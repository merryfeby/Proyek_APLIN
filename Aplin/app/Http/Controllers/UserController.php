<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	

	function register(Request $req) {
		$validated = $req->validate([
            'username' => 'required|unique:user,username',
            'password' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
        ]);

		try{
			$new_user = new User;
			$new_user->username = $req->username;
			$new_user->password = Hash::make($req->password);
			$new_user->email = $req->email;
			$new_user->telp = $req->phone;
	
			$new_user->save();
	
			return redirect('/')->with('success', 'Registration successful!');
		}catch (\Exception $e) {
            
            Log::error('User registration error: ' . $e->getMessage());

            return redirect('/register')->with('error', 'An error occurred while registering. Please try again.');
        }
		// }

	}



	function logout() {
		session()->flush();
		return redirect('/');
	}

	function index() {
		$movies = Movie::whereNotNull('license')->get();
		return view('user_site.home', [
			'movie' => $movies
		]);
	}
}

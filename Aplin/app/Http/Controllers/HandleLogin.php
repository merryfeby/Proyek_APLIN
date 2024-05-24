<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginUser;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;



class HandleLogin extends Controller
{
	//
	function index(){
			$employee = Employee::where('status',1)->get();
			return view("Karyawan",[
					'employee' => $employee
			]);
	}
	public function login(Request $request)
	{
		$username = $request->input('username');
		$password = $request->input('password');

		
		$user = User::where('username', $username)->first();
		$employee = Employee::where('username', $username)->first();
		
		if ($user && Hash::check($password, $user->password)) {
			session(['login' => $username]);
			return redirect('/homeUser');
		} else if ($employee && $password == $employee->password) {
			session(['login' => $username]);
			return redirect()->route('profilekaryawan');
		} else if ($username == 'admin' && $password == 'admin') {
			return redirect('/admin'); 
		} else {
			return redirect()->back();
		}
	}
}

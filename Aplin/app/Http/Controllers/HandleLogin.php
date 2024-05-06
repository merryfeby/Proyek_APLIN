<?php

namespace App\Http\Controllers;
use App\Models\LoginUser;
use App\Models\Employee;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        $employee = Employee::where('username', $username)->first();
        $user = LoginUser::where('name', $username)->first();

        if ($employee && $password == $employee->password) {
            return redirect('/menukaryawan');
        }
        else if ($user && $password == $user->password) {
            return redirect('/homeUser'); 
        }
        else if($username == 'admin' && $password == 'admin'){
            return redirect('/admin'); 
        }
        else{
            return redirect('/');
        }
        
    }
}

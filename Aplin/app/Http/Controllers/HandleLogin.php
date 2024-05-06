<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HandleLogin extends Controller
{
    //
    function index(){
        // $barang = Barang::all();
        $employee = Employee::where('status',1)->get();
        // dd($employee);
        
        return view("Karyawan",[
            'employee' => $employee
        ]);
    }
}

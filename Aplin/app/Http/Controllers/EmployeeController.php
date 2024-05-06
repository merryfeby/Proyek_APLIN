<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    function index(){
        // $barang = Barang::all();
        $employee = Employee::where('status',1)->get();
        return view("Karyawan",[
            'employee' => $employee
        ]);
    }
    function insert(Request $request){

        $data = new Employee;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->name = $request->name;
 
        $data->save();

        // return view("list");
        return redirect()->back();
    }
    function update(Request $request){

        $data = Employee::find($request->id);
        // $data = Barang::where('id_barang',$request->id);
        //sama aja

        $data->username = $request->uername;
        $data->password = $request->password;
        $data->name = $request->name;
 
        $data->save();

        // return view("list");
        return redirect()->back();
    }
    // function delete(Request $request){

    //     $data = Barang::find($request->id);
    //     // $data = Barang::where('id_barang',$request->id);
    //     //sama aja

    //     $data->status_barang = 0;
        
 
    //     $data->save();

    //     // return view("list");
    //     return redirect()->back();
    // }

}

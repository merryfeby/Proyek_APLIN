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
        // dd($employee);
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

    // function delete(Request $request)
    // {
    //     $employeeId = $request->id;
    //     if (!$employeeId) {
    //         return redirect()->back()->withErrors(['error' => 'Employee ID is required for deletion.']);
    //     }
        
    //     $employee = Employee::find($employeeId);
        
    //     if (!$employee) {
    //         return redirect()->back()->withErrors(['error' => 'Employee with ID ' . $employeeId . ' not found.']);
    //     }

    //     $employee->forceDelete();

    //     return redirect()->back()->with('success', 'Employee permanently deleted.');
    // }

    function delete(Request $request)
{
    $employeeUsername = $request->username;

    if (!$employeeUsername) {
        return redirect()->back()->withErrors(['error' => 'Employee username is required for deletion.']);
    }

    $employee = Employee::where('username', $employeeUsername)->first();

    if (!$employee) {
        return redirect()->back()->withErrors(['error' => 'Employee with username ' . $employeeUsername . ' not found.']);
    }

    $employee->forceDelete();

    return redirect()->back()->with('success', 'Employee permanently deleted.');
}


    // function update(Request $request){

    //     $data = Employee::find($request->id);
    //     // $data = Barang::where('id_barang',$request->id);
    //     //sama aja

    //     $data->username = $request->username;
    //     $data->password = $request->password;
    //     $data->name = $request->name;
 
    //     $data->save();

    //     // return view("list");
    //     return redirect()->back();
    // }


}

<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    function index(){
        $employees = Employee::where('status',1)->get();
        return view("Karyawan",[
            'employees' => $employees
        ]);
    }
    function insert(Request $request){
        $data = new Employee;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->name = $request->name;

        $data->save();
        return redirect()->back();
    }

    function delete(Request $request)
    {
        $employeeUsername = $request->input('username');

        if (!$employeeUsername) {
            return redirect()->back()->withErrors(['error' => 'Employee username is required for deletion.']);
        }

        $employee = Employee::where('username', $employeeUsername)->first();

        if ($employee) {
            $employee->status = 0;
            $employee->save();
            return redirect()->back()->with('success', 'Employee deleted successfully.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Employee with username ' . $employeeUsername . ' not found.']);
        }
    }


    function update(Request $request){

        $employeeUsername = $request->input('username');

        $employee = Employee::where('username', $employeeUsername)->first();
        if ($employee) {
            $employee->name = $request->input('name');
            $employee->password = $request->input('password');
            $employee->save();
            return redirect()->back()->with('success', 'Employee updated successfully.');
        } else {
            return redirect()->back()->withErrors(['error' => 'Employee with username ' . $employeeUsername . ' not found.']);
        }
    }


}

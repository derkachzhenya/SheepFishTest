<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {

        $employees = Employee::paginate(10);
        return view('employee.index', compact('employees'));
    }


    public function create()
    {
        $companies = Company::all();
        return view('employee.create', compact('companies'));
    }


    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated();
        Employee::firstOrCreate($data);
        return redirect()->route('employee.index');
    }



    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }


    public function edit(Employee $employee)
    {
        $companies = Company::all();
        return view('employee.edit', compact('employee', 'companies'));
    }


    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $data = $request->validated();
        $employee->update($data);
        return redirect()->route('employee.index', compact('employee'));
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index', compact('employee'));
    }
}

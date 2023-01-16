<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeFormRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
     public function index()
    {
        $employees = Employee::all();
        return view('backend.employee.index', compact('employees'));
    }

    public function create()
    {
        return view('backend.employee.form');
    }

    public function store(EmployeeFormRequest $request)
    {
        Employee::create($request->validated());
    }

    public function show($id)
    {
        //
    }

    public function edit(Employee $employee)
    {
        return view('backend.employee.form', compact('employee'));
    }

    public function update(EmployeeFormRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
    }
}

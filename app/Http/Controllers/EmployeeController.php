<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('employee.home', compact('employee'));
    }

    public function create()
    {
        return view('employee.create', compact('employee'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'atasan_id' => 'required',
            'company_id' => 'required',
        ]);
        Employee::create($request->all());
        
        return redirect()->route('employee.index')
        ->with('success', 'Data Berhasil Ditambahkan.');
    }

    public function edit(Employee $employee)
    {        
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nama' => 'required',
            'atasan_id' => 'required',
            'company_id' => 'required',
        ]);
        $employee->update($request->all());
        
        return redirect()->route('employee.index')
        ->with('success', 'Data Berhasil Diupdate.');
    }

    public function delete(Employee $employee)
    {
        $employee->delete();
        
        return redirect()->route('employee.index')
        ->with('success', 'Data Berhasil Dihapus.');
    }
}

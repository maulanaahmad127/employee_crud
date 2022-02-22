<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return view('company.home', compact('company'));
    }

    public function create()
    {
        return view('company.create', compact('company'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        Company::create($request->all());

        return redirect()->route('company.index')
        ->with('success', 'Data Berhasil Ditambahkan.');
    }

    public function edit(Company $company)
    {        
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        $company->update($request->all());
        
        return redirect()->route('company.index')
        ->with('success', 'Data Berhasil Diupdate.');
    }

    public function delete(Company $company)
    {
        $company->delete();
        
        return redirect()->route('company.index')
        ->with('success', 'Data Berhasil Dihapus.');
    }
}

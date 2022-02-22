<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use Elibyy\TCPDF\Facades\TCPDF;

class DataController extends Controller
{
    public function index()
    {
        $data = DB::table('employee')
        ->select(
            'employee.id',
            'employee.nama',
            DB::raw('(CASE
            WHEN atasan_id is null THEN "CEO"
            WHEN atasan_id = 1 THEN "Direktur"
            WHEN atasan_id = 2 THEN "Manager"
            WHEN atasan_id > 2 THEN "Staff"
            END) as Posisi'),
            'company.nama as Perusahaan'
        )
        ->join('company', 'employee.company_id', '=', 'company.id')
        ->get();
        return view('home', compact('data'));
    }

    public function exportexcel()
    {
        return Excel::download(new DataExport, 'data.xlsx');
    }

    public function exportpdf()
    {
        return Excel::download(new DataExport, 'data.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}

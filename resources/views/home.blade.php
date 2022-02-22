@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <center>
    <div class="container">
        <h1>Employee & Company</h1>
        <hr>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-3">
            <a href="{{ route('employee.index') }}" class="btn btn-primary w-100">Employee</a>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-3">
            <a href="{{ route('company.index') }}" class="btn btn-primary w-100">Company</a>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <br>
        <table class="table table-stripped">
            <thead class="table-light" align="center">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Perusahaan</th>
                </tr>
            </thead>
            <tbody align="center">
                <tr>
                    @foreach($data as $row)
                    <td>{{ $row -> id }}</td>
                    <td>{{ $row -> nama }}</td>
                    <td>{{ $row -> Posisi }}</td>
                    <td>{{ $row -> Perusahaan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="row">
            <div class="col">
            <a href="{{ route('exportexcel') }}" class="btn btn-outline-success">Export to Excel</a> <a href="{{ route('exportpdf') }}" class="btn btn-outline-danger">Export to PDF</a>
            </div>
        </div>
    </div>
</center>
@endsection
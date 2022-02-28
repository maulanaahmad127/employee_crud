@extends('layouts.app')
@section('title', 'Employee')
@section('content')
    <div class="container">
        <h1>Employee</h1>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <a href="/" class="btn btn-secondary w-100">< Back to Home</a>
            </div>
            <div class="col-md-7">

            </div>
            <div class="col-md-3">
                <a href="{{ route('employee.create') }}" class="btn btn-primary w-100">+ Add New Employee</a>
            </div>
        </div> 
        
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-stripped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>ID Atasan</th>
                    <th>ID Company</th>
                    <th>Nama Company</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee as $emp)
                <tr>
                    <td>{{ $emp -> id }}</td>
                    <td>{{ $emp -> nama }}</td>
                    <td>{{ $emp -> atasan_id }}</td>
                    <td>{{ $emp -> company_id }}</td>
                    <td>{{ $emp -> company -> nama}}</td>
                    <td>
                        <a href="{{ route('employee.edit', $emp->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('employee.destroy', $emp->id) }}" class="btn btn-danger" onclick="return confirm('Hapus Data Employee dengan nama {{ $emp->nama }} ?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
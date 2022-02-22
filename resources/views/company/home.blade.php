@extends('layouts.app')
@section('title', 'Company')
@section('content')
    <div class="container">
        <h1>Company</h1>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <a href="/" class="btn btn-secondary w-100">< Back to Home</a>
            </div>
            <div class="col-md-7">

            </div>
            <div class="col-md-3">
                <a href="{{ route('company.create') }}" class="btn btn-primary w-100">+ Add New Company</a>
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
                    <th>Nama Company</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($company as $com)
                <tr>
                    <td>{{ $com -> id }}</td>
                    <td>{{ $com -> nama }}</td>
                    <td>{{ $com -> alamat }}</td>
                    <td>
                        <a href="{{ route('company.edit', $com->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('company.destroy', $com->id) }}" class="btn btn-danger" onclick="return confirm('Hapus Data Company dengan nama {{ $com->nama }} ?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends('layouts.app')
@section('title', 'Edit Company')
@section('content')
    <div class="container">
        <h1>Edit Company</h1>
        <hr>
        <form action="{{ route('company.update', $company->id) }}" class="mt-5" method="post">
            @csrf
            <div class="form-grup">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama Company" value="{{ $company->nama }}"/>
            </div>
            <br>
            <div class="form-grup">
                <label for="alamat">ID Atasan</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat" value="{{ $company->alamat }}"/>
            </div>
            <br>
            <a href="{{ route('company.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
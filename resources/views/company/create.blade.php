@extends('layouts.app')
@section('title', 'Create Company')
@section('content')
    <div class="container">
        <h1>Add New Company</h1>
        <hr>
        <form action="{{ route('company.store') }}" class="mt-5" method="post">
            @csrf
            <div class="form-grup">
                <label for="nama">Nama Company</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama Company"/>
            </div>
            <br>
            <div class="form-grup">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat"/>
            </div>
            <br>
            <a href="{{ route('company.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
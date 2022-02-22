@extends('layouts.app')
@section('title', 'Create Employee')
@section('content')
    <div class="container">
        <h1>Add New Employee</h1>
        <hr>
        <form action="{{ route('employee.store') }}" class="mt-5" method="post">
            @csrf
            <!-- <div class="form-grup">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID"/>
            </div>
            <br> -->
            <div class="form-grup">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama"/>
            </div>
            <br>
            <div class="form-grup">
                <label for="atasan_id">ID Atasan</label>
                <input type="text" class="form-control" id="atasan_id" name="atasan_id" placeholder="Enter ID Atasan"/>
            </div>
            <br>
            <div class="form-grup">
                <label for="company_id">ID Company</label>
                <input type="text" class="form-control" id="company_id" name="company_id" placeholder="Enter ID Company"/>
            </div>
            <br>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
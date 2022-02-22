@extends('layouts.app')
@section('title', 'Edit Employee')
@section('content')
    <div class="container">
        <h1>Edit Employee</h1>
        <hr>
        <form action="{{ route('employee.update', $employee->id) }}" class="mt-5" method="post">
            @csrf
            <!-- <div class="form-grup">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID" value="{{ $employee->id }}"/>
            </div>
            <br> -->
            <div class="form-grup">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" value="{{ $employee->nama }}"/>
            </div>
            <br>
            <div class="form-grup">
                <label for="atasan_id">ID Atasan</label>
                <input type="text" class="form-control" id="atasan_id" name="atasan_id" placeholder="Enter ID Atasan" value="{{ $employee->atasan_id }}"/>
            </div>
            <br>
            <div class="form-grup">
                <label for="company_id">ID Company</label>
                <input type="text" class="form-control" id="company_id" name="company_id" placeholder="Enter ID Company" value="{{ $employee->company_id }}"/>
            </div>
            <br>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
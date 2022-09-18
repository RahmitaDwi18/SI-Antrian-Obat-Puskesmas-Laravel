@extends('layouts.main')

@section('content')

<form action="{{ route('polys.store') }}" method="POST" class="formBook">

    @csrf
    <div class="container">
    <div class="content">
        <h2>Daftar Input Kategori Ruang Poli :</h2>
        <h5>Silahkan Masukkan Data</h5>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Poli</label>
        <input type="text" name="poly_name" id="exampleInputPassword1" 
        class="form-control @error('poly_name') is-invalid @enderror"
        value="{{ old('poly_name') }}">
    @error('poly_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Dokter</label>
        <input type="text" name="doctor_name" id="exampleInputPassword1" 
        class="form-control @error('doctor_name') is-invalid @enderror"
        value="{{ old('doctor_name') }}">
    @error('doctor_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
</div>
</form>
@endsection
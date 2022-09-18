@extends('layouts.main')
@section('title', 'Edit Kategori Poli')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Kategori Poli</h1>

            <a href="{{ route('polys.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Poli</h6>
            </div>
            <form action="{{ route('polys.update', $poly->id_poly) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Nama Poli :</label>
                        <input type="text" name="poly_name" value="{{ $poly->poly_name }}" id="poly_name"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="title">Nama Dokter :</label>
                        <input type="numeric" name="doctor_name" value="{{ $poly->doctor_name }}" id="doctor_name"
                            class="form-control">
                    </div>

                <div class="card-footer text-right">
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>
            </form>
        </div>

    </div>
@endsection


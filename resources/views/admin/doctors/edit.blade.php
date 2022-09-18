@extends('layouts.main')
@section('title', 'Edit Antrian Resep Obat Pasien')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Pasien</h1>
            
            <a href="{{ route('patients.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Antrian Pasien</h6>
            </div>

            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama Pasien :</label>
                        <input type="text" name="name" value="{{ $patient->name }}" id="name"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="age">Umur Pasien :</label>
                        <input type="number" name="age" value="{{ $patient->age }}" id="age"
                            class="form-control">
                    </div>
                
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin :</label>
                        <select name="gender" id="gender" class="form-control">
                            <option>Perempuan</option>
                            <option>Laki-laki</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="poly_name">Ruang Poli :</label>
                        <select name="id_poly" id="poly_name" class="form-control">
                            @foreach ($polys as $poly)
                                <option value="{{ $poly->id_poly }}">{{ $poly->poly_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="symptom">Gejala Pasien :</label>
                        <input type="text" name="symptom" value="{{ $patient->symptom }}" id="symptom"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="recipe">Resep Obat :</label>
                        <input type="text" name="recipe" value="{{ $patient->recipe }}" id="recipe"
                            class="form-control">
                    </div>

                </div>
                <div class="card-footer text-right">
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>
            </form>




            
        </div>

    </div>
@endsection
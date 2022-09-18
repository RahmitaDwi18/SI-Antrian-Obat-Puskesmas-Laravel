@extends('layouts.main')

@section('content')
    <form>
        <a href="{{ route('patients.index') }}"> <button class="btn btn-primary mr-20"> Kembali ke Index </button></a>
        <fieldset disabled>
            <legend>Data Antrian Obat Pasien </legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ID Pasien :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                    value="{{ $patient->id }}">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nama Pasien :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                    value="{{ $patient->name }}">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Umur Pasien :</label>
                <input type="numeric" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                    value="{{ $patient->age }}">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Jenis Kelamin :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                    value="{{ $patient->gender }}">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Ruang Poli :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                    value="{{ $patient->poly->poly_name }}">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Gejala Pasien :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                    value="{{ $patient->symptom }}">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Resep Obat :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                    value="{{ $patient->recipe }}">
            </div>

        </fieldset>
    </form>

    <form action="{{ route('patients.destroy', $patient->id) }}" method="post">

        @csrf
        @method('DELETE')

        <input type="submit" value="Hapus">
    </form>
    
@endsection

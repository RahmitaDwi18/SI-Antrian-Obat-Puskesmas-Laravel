@extends('layouts.main')

@section('title', 'Daftar Antrian Obat Pasien')


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Antrian Obat Pasien</h1>
        <p class="mb-4">Halaman ini menampilkan semua daftar antrian obat pasien yang telah berhasil disimpan dalam
            database <a target="_blank" href="https://datatables.net"></a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Antrian Obat Pasien</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Pasien</th>
                                <th>Umur Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Ruang Poli</th>
                                <th>Gejala Pasien</th>
                                <th>Resep Obat</th>
                                <th></th>
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($patients as $pasien)
                                <tr>
                                    <td>{{ $pasien->id }}</td>
                                    <td>{{ $pasien->name }}</td>
                                    <td>{{ $pasien->gender }}</td>
                                    <td>{{ $pasien->poly->poly_name }}</td>
                                    <td>{{ $pasien->symptom }}</td>
                                    <td>{{ $pasien->recipe }}</td>
                                    <td>
                                        <a href="{{ route('patients.show', $pasien->id) }}"> <button
                                                class="btn btn-warning mr-3">Lihat</button> </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('patients.edit', $pasien->id) }}"> <button
                                                class="btn btn-success mr-3">Edit
                                            </button> </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('patients.destroy', $pasien->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href=""><button type="submit" value="hapus" class="btn btn-danger">
                                                    hapus</button> </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <a href="{{ route('patients.create') }}"> <button class="btn btn-primary"> Tambah Antrian</button></a>
    <br><br>
    <table border="1" class="table">

        <tbody>

        </tbody>
    </table>
@endsection

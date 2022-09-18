@extends('layouts.main')

@section('title', 'Kategori Ruang Poli')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Kategori Ruang Poli</h1>
        <p class="mb-4">Halaman ini menampilkan semua daftar kategori ruang poli yang telah berhasil disimpan dalam database <a
                target="_blank" href="https://datatables.net"></a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Ruang Poli</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Ruang Poli</th>
                                <th>Nama Dokter</th>
                                <th></th>            
                                <th>Aksi</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($polys as $poli)
                                <tr>
                                    <td>{{ $poli->id_poly }}</td>
                                    <td>{{ $poli->poly_name }}</td>
                                    <td>{{ $poli->doctor_name }}</td>                                    
                                    <td>
                                        <a href="{{ route('polys.show', $poli->id_poly) }}"><button
                                            class="btn btn-warning">Lihat</button> </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('polys.edit', $poli->id_poly) }}"><button class="btn btn-success">Edit
                                        </button> </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('polys.destroy', $poli->id_poly) }}" method="post">
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
    <a href="{{ route('polys.create') }}"> <button class="btn btn-primary"> Tambah Data</button></a>
    <br><br>
    <table border="1" class="table">

    @endsection

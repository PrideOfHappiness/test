@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>Tambah Data Semester</h1>
@endsection

@section('isi')
    <form action="{{ route('plat_nomor.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kode_negara" class="form-label">Kode Negara</label>
            <input type="text" class="form-control" id="kode_negara" name="kode_negara" required>
        </div>
        <div class="mb-3">
            <label for="nama_negara" class="form-label">Negara</label>
            <input type="text" class="form-control" id="nama_negara" name="nama_negara" required>
        </div>
        <div class="mb-3">
            <label for="foto_plat" class="form-label">File Foto</label>
            <input type="file" class="form-control" id="foto_plat" name="foto_plat" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

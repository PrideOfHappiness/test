@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>Tambah Data Merek</h1>
@endsection

@section('isi')
    <form action="{{ route('mesin.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_mesin" class="form-label">Nama Mesin</label>
            <input type="text" class="form-control" id="nama_mesin" name="nama_mesin" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

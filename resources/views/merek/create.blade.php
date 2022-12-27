@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>Tambah Data Merek</h1>
@endsection

@section('isi')
    <form action="{{ route('merek.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_merek" class="form-label">Nama Brand</label>
            <input type="text" class="form-control" id="nama_merek" name="nama_merek" required>
        </div>
        <div class="mb-3">
            <label for="negara_asal" class="form-label">Negara Asal Brand</label>
            <input type="text" class="form-control" id="negara_asal" name="negara_asal" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

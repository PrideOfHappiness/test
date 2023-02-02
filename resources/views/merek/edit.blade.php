@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>Tambah Data Merek</h1>
@endsection

@section('isi')
    <form action="{{ route('merek.update', $merek->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_merek" class="form-label">Nama Brand</label>
            <input type="text" class="form-control" id="nama_merek" name="nama_merek" value="{{ $merek->nama_merek }}" required>
        </div>
        <div class="mb-3">
            <label for="negara_asal" class="form-label">Negara Asal Brand</label>
            <input type="text" class="form-control" id="negara_asal" name="negara_asal" value="{{ $merek->negara_asal }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

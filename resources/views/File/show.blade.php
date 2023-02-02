@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>Lihat Data </h1>
@endsection

@section('isi')
        <div class="mb-3">
            <label for="nama_merek" class="form-label">Brand</label>
            <select name="nama_merek" id="nama_merek" >
                @foreach($merek as $mrk)
                    <option value="{{ $mrk->id }}"> {{ $mrk->nama_merek }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kendaraan </label>
            <input type="text" name="nama" id="nama" value="{{ $file->nama }}">
        </div>
        <div class="mb-3">
            <label for="nama_plat" class="form-label">Plat Nomor</label>
            <select name="nama_plat" id="nama_plat" >
                @foreach($platNomor as $plt)
                    <option value="{{ $plt->id }}"> {{ $plt->nama_negara }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="foto_mobil" class="form-label">Foto Kendaraan</label>
                <img width="300px" src="{{ url('upload/mobil/'. $file->namaFile)}}">
        </div>
@endsection


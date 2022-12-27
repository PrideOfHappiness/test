@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>Tambah Data Mobil</h1>
@endsection

@section('isi')
    <form action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_merek" class="form-label">Nama Brand</label>
            <select name="id_merek" id="id_merek" >
                <option value=""> Pilih Merek terlebih dahulu! </option>
                @foreach($merek as $mrk)
                    <option value="{{ $mrk->id }}"> {{ $mrk->nama_merek }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="id_plat" class="form-label">Plat Nomor</label>
            <select name="id_plat" id="id_plat">
                <option value=""> Pilih Plat Nomor terlebih dahulu! </option>
                @foreach($platNomor as $pn)
                    <option value="{{ $pn->id }}"> {{ $pn->negara }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_mesin" class="form-label">Mesin</label>
            <select name="id_mesin" id="id_mesin">
                <option value=""> Pilih Mesin terlebih dahulu! </option>
                @foreach($mesin as $sms)
                    <option value="{{ $sms->id }}"> {{ $sms->nama_mesin }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="foto_mobil" class="form-label">File Foto</label>
            <input type="file" class="form-control" id="foto_mobil" name="foto_mobil" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
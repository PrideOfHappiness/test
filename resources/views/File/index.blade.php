@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>List Data Plat Nomor</h1>
@endsection

@section('isi')
    <div class = "pull-right mb-2">
            <a class="btn btn-success" href="{{ route('mobil.create') }}"> Tambah Data Mobil</a>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table">
            <thead>
              <tr>
                <th>Nama Brand </th>
                <th>Nama Mobil </th>
                <th>Plat Nomor </th>
                <th>Mesin</th>
                <th>Foto </th>
                <th>Aksi Data</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($file as $mrk)
              <tr>
                <td>{{ $mrk->merek->nama_merek}} </td>
                <td>{{ $mrk->nama}} </td>
                <td>{{ $mrk->plat_nomor->nama_negara}} </td>
                <td>{{ $mrk->mesin->nama_mesin}} </td>
                <td> <img width="150px" src="{{ url('upload/mobil/'. $mrk->namaFile)}}"></td>
                <td>
                    <a class="badge bg-info" href="{{ route('mobil.show', $mrk->id) }}"> Detail Foto </span></a>
                </td>
              </tr>
            @endforeach
            </tbody>
    </table>
    {!! $file->links() !!}
@endsection

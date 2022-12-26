@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>List Data Plat Nomor</h1>
@endsection

@section('isi')
    <div class = "pull-right mb-2">
            <a class="btn btn-success" href="{{ route('plat_nomor.create') }}"> Tambah Plat Nomor</a>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table">
            <thead>
              <tr>
                <th>Kode Negara </th>
                <th>Nama Negara </th>
                <th>Foto </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($plat_nomor as $mrk)
              <tr>
                <td>{{ $mrk->kode_negara}} </td>
                <td>{{ $mrk->nama_negara}} </td>
                <td> <img width="150px" src="{{ url('upload/platNomor/'. $mrk->namaFile)}}"></td>
              </tr>
            @endforeach
            </tbody>
    </table>
    {!! $plat_nomor->links() !!}
@endsection

@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>List Data Plat Nomor</h1>
@endsection

@section('isi')
    <div class = "pull-right mb-2">
            <a class="btn btn-success" href="{{ route('mesin.create') }}"> Tambah Data Mesin</a>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table">
            <thead>
              <tr>
                <th>ID </th>
                <th>Nama Mesin </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($mesin as $mrk)
              <tr>
                <td>{{ $mrk->id}} </td>
                <td>{{ $mrk->nama_mesin}} </td>
              </tr>
            @endforeach
            </tbody>
    </table>
    {!! $mesin->links() !!}
@endsection

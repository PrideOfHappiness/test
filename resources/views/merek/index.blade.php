@extends('dashboard/dashboardAdmin')

@section('layout')
    <h1>List Data Merek</h1>
@endsection

@section('isi')
    <div class = "pull-right mb-2">
            <a class="btn btn-success" href="{{ route('merek.create') }}"> Tambah Merek</a>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
    @endif

    <table class="table">
            <thead>
              <tr>
                <th>Nama Merek </th>
                <th>Negara Asal </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($merek as $mrk)
              <tr>
                <td>{{ $mrk->merek}} </td>
                <td>{{ $mrk->negara_asal}} </td>
              </tr>
            @endforeach
            </tbody>
    </table>
    {!! $merek->links() !!}
@endsection

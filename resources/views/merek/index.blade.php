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

    Jumlah Data : {{ $jumlahMerek }} Data
    <table class="table">
            <thead>
              <tr>
                <th>Nama Merek </th>
                <th>Negara Asal </th>
                <th>Action Data</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($merek as $mrk)
              <tr>
                <td>{{ $mrk->nama_merek}} </td>
                <td>{{ $mrk->negara_asal}} </td>
                <td>
                    <form action = "{{ route('merek.destroy', $mrk->id) }}" method="Post">
                        <a class="badge bg-warning" href="{{ route('merek.edit', $mrk->id) }}">Edit</span></a>
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="badge bg-danger"> Delete </button>
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
    </table>
    {!! $merek->links() !!}
@endsection

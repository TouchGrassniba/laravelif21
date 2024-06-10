@extends('layout.main')
@section('title', 'Daftar Mahasiswa')
@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Mahasiswa</h4>
        <p class="card-description">
          List Data Mahasiswa
        </p>
        <a href="{{ url('mahasiswa/create') }}" class="btn btn-success btn-rounded btn-fw">Tambah Fakultas</a>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Foto</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>alamat</th>
                <th>Program Studi</th>
                <th>Kota</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mahasiswa as $item)
        <tr>
          <td><img src="{{ url('foto/', $item['url_foto']) }}" alt="" class="img-"></td>
          <td>{{  $item['npm'] }} </td>
          <td>{{ $item['nama'] }}</td>
          <td>{{ $item['jk'] }}</td>
          <td>{{ $item['tempat_lahir'] }}</td>
          <td>{{ $item['tanggal_lahir'] }}</td>
          <td>{{ $item['alamat'] }}</td>
          <td>{{  $item['prodi']['nama'] }} </td>
          <td>{{ $item['kota']['nama'] }}</td>
          <td>
            <a href="{{ route('mahasiswa.show', $item['id']) }}" class="btn btn-sm btn-info btn-rounded">Show</a>
            <a href="{{ route('mahasiswa.edit', $item['id']) }}" class="btn btn-sm btn-warning btn-rounded"">Edit</a>
          <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="post" style="display: inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-sm btn-danger btn-rounded btn-fw show_confirm" data-nama="{{ $item['nama'] }}">Hapus</button>
          </form>
          </td>
        </tr>

      @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

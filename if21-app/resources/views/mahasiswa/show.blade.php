@extends('layout.main')
@section('title', 'Daftar Mahasiswa')
@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <table class="table">
    </tr>
      <td>Foto</td>
      <td><img src="{{ url('foto/', $mahasiswa['url_foto']) }}" alt=""></td>
    </tr>
    <tr>
      <td>NPM</td>
      <td>{{ $mahasiswa['npm'] }}</td>
    </tr>
    <tr>
      <td>Nama Mahasiswa</td>
      <td>{{ $mahasiswa['nama'] }}</td>
    </tr>
    <tr>
      <td>Program Studi</td>
      <td>{{ $mahasiswa['prodi']['nama'] }}</td>
    </tr>
    <tr>
      <td>Tempat Tanggal Lahir</td>
      <td>{{ $mahasiswa['tempat_lahir'] }}, {{ $mahasiswa['tanggal_lahir'] }}</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>{{ $mahasiswa['alamat'] }}</td>
    </tr>
      <td>Kota</td>
      <td>{{ $mahasiswa['kota']['nama'] }}</td>
    </tr>
    </table>
  </div>
</div>

@endsection
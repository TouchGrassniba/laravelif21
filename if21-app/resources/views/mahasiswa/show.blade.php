@extends('layout.main')
@section('title', 'Daftar Mahasiswa')
@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    {{ $mahasiswa['npm'] }} <br>
    {{ $mahasiswa['nama'] }} <br>
    {{ $mahasiswa['tempat_lahir'] }} <br>
    {{ $mahasiswa['tanggal_lahir'] }} <br>
    {{ $mahasiswa['prodi']['nama'] }} <br>
    {{ $mahasiswa['kota']['nama'] }} <br>
    <img src="{{ $mahasiswa['url_foto'] }}" alt="" class="mg-2">
  </div>
</div>

@endsection
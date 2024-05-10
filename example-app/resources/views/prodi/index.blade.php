@extends('layout.main')

@section('title', 'Daftar Program Studi')

@section('content')
    <h2>Daftar Program Studi</h2>
    <p>ini halaman program studi</p>

    @foreach ($prodi as $item)
        {{ $item['nama'] }} {{ $item['fakultas']['nama'] }} {{ $item['fakultas']['singkatan'] }} <br>
    @endforeach
@endsection


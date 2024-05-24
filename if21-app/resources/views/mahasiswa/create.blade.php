@extends('layout.main')
@section('title', 'Tambah Mahasiswa')
@section('content')
<h2>Tambah Prodi</h2>
<p>Ini halaman tambah prodi</p>
</form action="{{ route('mahasiwa.store') }}" method="post">
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Mahasiwa</h4>
                <p class="card-description">
                    Formulir Tambah Mahasiswa
                </p>
                <form class="forms-sample" action="{{  route('mahasiswa.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Program Studi</label>
                        <input type="text" name="nama" id="" value="{{old('nama')}}">
                        <div class="form-control">
                            @error('nama')
                                <span class="text-danger"></span>{{$message}}
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="singkatan">Singkatan</label>
                            <select name="fakultas_id" id="">
                                @foreach ($fakultas as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                            <div class="form-control">
                                @error('fakultas_id')
                                    {{$message}}
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{url('prodi')}}" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<p>©2024</p>
@endsection
@extends('layout.main')
@section('title', 'Tambah Mahasiswa')
@section('content')
<h2>Edit Mahasiswa</h2>
<p>Ini Halaman Edit Mahasiswa</p>
</form action="{{ route('mahasiswa.store') }}" method="post">
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Mahasiwa</h4>
                <p class="card-description">
                    Formulir Edit Mahasiswa
                </p>
                <form class="forms-sample" action="{{  route('mahasiswa.update', $mahasiswa['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" id="" value="{{ old('npm') ? old('npm') : $mahasiswa['npm']}}" readonly>
                        <div class="form-control">
                            @error('npm')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="" value="{{ old('nama') ? old('nama') : $mahasiswa['nama']}}">
                        <div class="form-control">
                            @error('nama')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                            <label for="kota_id">Jenis Kelamin</label>
                            <select name="kota_id" id="">
                                    <option>L</option>
                                    <option>P</option>
                            </select>
                            <div class="form-control">
                                @error('kota_id')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="" value="{{ old('tempat_lahir') ? old('tempat_lahir') : $mahasiswa['tempat_lahir']}}">
                        <div class="form-control">
                            @error('tempat_lahir')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="" value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : $mahasiswa['tanggal_lahir']}}">
                        <div class="form-control">
                            @error('tanggal_lahir')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="" value="{{ old('alamat') ? old('alamat') : $mahasiswa['alamat']}}">
                        <div class="form-control">
                            @error('alamat')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                        <div class="form-group ">
                            <label for="kota_id">Kota</label>
                            <select name="kota_id" id="">
                                @foreach ($kota as $item)
                                    <option value="{{ $item['id'] }}" {{ (old('kota_id') == $item['id'] ? 'selected' : ($mahasiswa['kota_id'] == $item['id'] ? 'selected' : null)) }}>{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                            <div class="form-control">
                                @error('kota_id')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="prodi_id">Program Studi</label>
                            <select name="prodi_id" id="">
                                @foreach ($prodi as $item)
                                    <option value="{{ $item['id'] }}" {{ (old('prodi_id') == $item['id'] ? 'selected' : ($mahasiswa['prodi_id'] == $item['id'] ? 'selected' : null)) }}>{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                            <div class="form-control">
                                @error('prodi_id')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="url_foto">File Foto</label>
                        <input type="file" name="url_foto" id="" class="form-control">
                        <div class="form-control">
                            @error('url_foto')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{url('mahasiswa')}}" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<p>©2024</p>
@endsection

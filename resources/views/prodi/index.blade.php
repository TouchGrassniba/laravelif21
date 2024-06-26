@extends('layout.main')
@section('title', 'Daftar Fakultas')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Fakultas</h4>
                  <p class="card-description">
                    List Data Program Studi
                  </p>
                  @can('create', App\Models\Prodi::class)
                    <a href="{{ url('prodi/create') }}" class="btn btn-success btn-rounded btn-fw">Tambah Program Studi</a>
                  @endcan
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Fakultas</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($prodi as $item)
                        <tr>
                            <td>{{  $item['nama'] }} </td>
                            <td>{{  $item['fakultas'] ['nama'] }}</td>
                            <td>{{  $item['fakultas'] ['singkatan'] }}</td>
                        </tr>
                            
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))

  <script>
  Swal.fire({
    title: "Good Job!",
    text: "{{ session('success') }}",
    icon: "success"
  });
  </script>
@endif
@endsection
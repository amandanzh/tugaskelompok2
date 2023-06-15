@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Daftar Pengguna</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <a href="{{ route('pengguna.create') }}" class="btn btn-info btn-sm text-white mb-3">Tambah Pengguna</a>

            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
              </div>
            @endif

            <div class="table-responsive">
              <table class="table text-nowrap" id="table">
                <thead>
                  <tr>
                    <th class="border-top-0">No.</th>
                    <th class="border-top-0">Name</th>
                    <th class="border-top-0">Username</th>
                    <th class="border-top-0">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @if($data)
                    @foreach ($data as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->username  }}</td>
                       
                        <td class="">
                          <a href="{{ route('pengguna.edit', $item->id) }}" class="btn btn-sm btn-secondary text-white">
                            <i class="fas fa-external-link-alt"></i>
                          </a>
                          <a href="{{ route('pengguna.destroy', $item->id) }}" class="btn btn-sm btn-danger text-white" onclick="return confirm('Apakah Anda Yakin Menghapus Pengguna {{ $item->name }}')"><i class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  @endif

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- End Content -->
    </div>

@endsection

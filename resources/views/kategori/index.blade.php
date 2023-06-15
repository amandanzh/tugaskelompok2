@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Daftar Kategori</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <a href="{{ route('kategori.create') }}" class="btn btn-info btn-sm text-white mb-3">Tambah Kategori</a>

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
                    <th class="border-top-0">Nama Kategori</th>
                    <th class="border-top-0">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @if($data)
                    @foreach ($data as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                       
                        <td class="">
                          <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-sm btn-secondary text-white">
                            <i class="fas fa-external-link-alt"></i>
                          </a>
                          <form action="{{ route('kategori.destroy', $item->id) }}" method="post" class="d-inline" onsubmits="return confirm('Apakah Anda Yakin Menghapus Kategori {{ $item->name }}')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger text-white">
                              <i class="far fa-trash-alt"></i>
                            </button>
                          </form>
                          
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

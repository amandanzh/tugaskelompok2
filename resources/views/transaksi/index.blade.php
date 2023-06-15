@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Daftar Transaksi</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <a href="{{ route('transaksi.create') }}" class="btn btn-info btn-sm text-white mb-3">Tambah Transaksi</a>

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
                    <th class="border-top-0">Kode Transaki</th>
                    <th class="border-top-0">Tanggal</th>
                    <th class="border-top-0">Nama Akun</th>
                    <th class="border-top-0">Kategori</th>
                    <th class="border-top-0">Jumlah</th>
                    <th class="border-top-0">Keterangan</th>
                    <th class="border-top-0">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @if($data)
                    @foreach ($data as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->nama_akun }}</td>
                        <td>{{ $item->kategori->name }}</td>
                        <td>Rp {{ number_format( $item->jumlah )}}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="">
                          <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-sm btn-secondary text-white">
                            <i class="fas fa-external-link-alt"></i>
                          </a>
                          <form action="{{ route('transaksi.destroy', $item->id) }}" method="post" class="d-inline" onsubmits="return confirm('Apakah Anda Yakin Menghapus Data Transaksi">
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

@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Riwayat Transaksi</h3>

      <div class="row">
        <div class="col-sm-12">
          <div class="white-box" style="min-height: 20rem;">

           {{--  <a href="{{ route('transaksi.create') }}" class="btn btn-info btn-sm text-white mb-3">Tambah Transaksi</a> --}}

            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
              </div>
            @endif

            @foreach($data as $item)
              <div class="d-flex justify-content-between align-item-center">

                <div>
                  <p>{{ $item->user->name }}<br>
                  {{ $item->catalog->nama }}</p>  
                </div>

                <div>
                  <b style="font-size: 1.1rem; font-weight: 400;" class=" <?= $item->status_return == 0 ? "text-success" : "text-danger" ?>"><?= $item->status_return == 0 ? "+" : "-" ?> Rp{{ number_format($item->catalog->harga) }}</b><br>
                  <?= $item->status_return == 1 ? "<span class='text-danger'>Barang Direturn</span>" : "" ?>
                </div>
                
              </div>
              <hr>
            @endforeach

            
          </div>
        </div>
      </div>

      <!-- End Content -->
    </div>

@endsection

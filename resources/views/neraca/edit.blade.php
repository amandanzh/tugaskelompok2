@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Edit Data Transaksi</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <form action="{{ route('neraca.update', $data->id) }}" method="post">
              @csrf
              @method('put')

              <div class="mb-3">
                <label for="telepon" class="form-label">Nomor</label>
                <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="telepon" name="nomor" value="{{ old('nomor', $data->nomor) }}">
                @error('nomor')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
             
              <div class="mb-3">
                <label for="telepon" class="form-label">Nama Akun</label>
                <input type="text" class="form-control @error('nama_akun') is-invalid @enderror" id="telepon" name="nama_akun" value="{{ old('nama_akun', $data->nama_akun) }}">
                @error('nama_akun')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
             
              <div class="mb-3">
                <label for="telepon" class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('debit') is-invalid @enderror" id="telepon" name="debit" value="{{ old('debit', $data->debit) }}">
                @error('debit')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="telepon" class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('kredit') is-invalid @enderror" id="telepon" name="kredit" value="{{ old('kredit', $data->kredit) }}">
                @error('kredit')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="telepon" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="telepon" name="tanggal" value="{{ old('tanggal', $data->tanggal) }}">
                @error('tanggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
               
               <a href="{{ route('neraca.index') }}" class="btn btn-secondary btn-sm text-white " value="ubah">
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
              <button type="submit" class="btn btn-info btn-sm text-white">Simpan</button>
            </form>


          </div>
        </div>
      </div>

      <!-- End Content -->
    </div>

@endsection

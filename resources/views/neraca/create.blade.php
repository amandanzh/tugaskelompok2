@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Data Baru</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <form action="{{ route('neraca.store') }}" method="post">
              @csrf

              <div class="mb-3">
                <label for="telepon" class="form-label">Nomor</label>
                <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="telepon" name="nomor" value="{{ old('nomor') }}">
                @error('nomor')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Nama Akun</label>
                <input type="text" class="form-control @error('nama_akun') is-invalid @enderror" name="nama_akun" value="{{ old('nama_akun') }}">
                @error('nama_akun')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="v" class="form-label">Debit</label>
                <input type="number" class="form-control @error('debit') is-invalid @enderror" id="" name="debit" value="{{ old('debit') }}">
                @error('debit')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="telepon" class="form-label">Kredit</label>
                <input type="number" class="form-control @error('kredit') is-invalid @enderror" id="telepon" name="kredit" value="{{ old('kredit') }}">
                @error('kredit')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="telepon" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="telepon" name="tanggal" value="{{ old('tanggal') }}">
                @error('tanggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
             
               <a href="{{ route('neraca.index') }}" class="btn btn-secondary btn-sm text-white">
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

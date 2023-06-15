@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Data Baru</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <form action="{{ route('katalog.store') }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="mb-3">
                <label for="" class="form-label">Nama Katalog</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="v" class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="" name="harga" value="{{ old('harga') }}">
                @error('harga')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="telepon" class="form-label">Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="telepon" name="gambar" value="{{ old('gambar') }}">
                @error('gambar')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

               <a href="{{ route('katalog.index') }}" class="btn btn-secondary btn-sm text-white">
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

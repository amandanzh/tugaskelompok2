@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Data Kategori Baru</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <form action="{{ route('kategori.store') }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
               <a href="{{ route('kategori.index') }}" class="btn btn-secondary btn-sm text-white " value="ubah">
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

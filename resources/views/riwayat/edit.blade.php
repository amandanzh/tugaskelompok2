@extends('layouts.main')

@section('container')

  <div class="container-fluid">
      <!-- Content -->

      <h3 class="mb-4">Edit Data Transaksi</h3>


      <div class="row">
        <div class="col-sm-12">
          <div class="white-box">

            <form action="{{ route('transaksi.update', $data->id) }}" method="post">
              @csrf
              @method('put')
              <div class="mb-3">
                <label for="" class="form-label">Kode Transaksi</label>
                <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode', $data->kode) }}">
                @error('kode')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="v" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="" name="tanggal" value="{{ old('tanggal', $data->tanggal) }}">
                @error('tanggal')
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
                <label for="telepon" class="form-label">Kategori</label>
                <select name="kategori_id" class="form-control @error('kategori') is-invalid @enderror" id="">
                  @foreach($semuaKategori as $item)
                    <option value="{{ $item->id }}" {{ $item->id == old('kategori_id', $data->kategori_id) ? "selected" : "" }}>{{ $item->name }}</option>
                  @endforeach
                </select>
                @error('nama_akun')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="telepon" class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="telepon" name="jumlah" value="{{ old('jumlah', $data->jumlah) }}">
                @error('jumlah')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
               <div class="mb-3">
                <label for="telepon" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $data->keterangan) }}</textarea>
                @error('keterangan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
               <a href="{{ route('transaksi.index') }}" class="btn btn-secondary btn-sm text-white " value="ubah">
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

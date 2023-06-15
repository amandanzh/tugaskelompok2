@extends('layouts.main')

@section('container')
  
  <div class="container-fluid">

      <div class="row justify-content-start">
        <div class="col-lg-4 col-md-12">
          <div class="white-box analytics-info">
            <h3 class="box-title">Data Kategori</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
              <li>
                <div id="sparklinedash">
                  <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                </div>
              </li>
              <li class="ms-auto">
                <span class="counter text-success">{{ $kategori }}</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="white-box analytics-info">
            <h3 class="box-title">Data Pengguna</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
              <li>
                <div id="sparklinedash2">
                  <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                </div>
              </li>
              <li class="ms-auto">
                <span class="counter text-purple">{{ $pengguna }}</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="white-box analytics-info">
            <h3 class="box-title">Transaksi</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
              <li>
                <div id="sparklinedash3">
                  <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                </div>
              </li>
              <li class="ms-auto">
                <?php
                $k9 = 0;
                ?>
                <span class="counter text-info"><?= $k9 ?></span>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="white-box analytics-info">
            <h3 class="box-title">Data Barang</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
              <li>
                <div id="sparklinedash3">
                  <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                </div>
              </li>
              <li class="ms-auto">
                <?php
                $k9 = 0;
                ?>
                <span class="counter text-info"><?= $k9 ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- End Content -->
    </div>

@endsection


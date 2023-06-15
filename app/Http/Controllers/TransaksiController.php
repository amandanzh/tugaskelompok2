<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kategori;

class TransaksiController extends Controller
{
    //
    public function index()
    {
        return view('transaksi.index',
            [
                'title' => "Data Transaksi",
                'data' => Transaksi::orderby('id', 'DESC')->get(),
            ]);
    }

    public function create()
    {
        return view('transaksi.create',
            [
                'title' => "Tambah Data Transaksi",
                'semuaKategori' => Kategori::get(),
            ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'tanggal' => 'required',
            'nama_akun' => 'required',
            'kategori_id' => 'required',
            'jumlah' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->kode = $request->kode;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->nama_akun = $request->nama_akun;
        $transaksi->kategori_id = $request->kategori_id;
        $transaksi->jumlah = $request->jumlah;

        if ($request->keterangan) {
            $transaksi->keterangan = $request->keterangan;
        }

        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Data Transaksi Berhasil Ditambah');
    }

    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit',
            [
                'data' => $transaksi,
                'title' => "Update Data Transaksi",
                'semuaKategori' => Kategori::get(),
            ]);
    }

    public function update(Transaksi $transaksi, Request $request)
    {
        $rules = [
            'kode' => 'required',
            'tanggal' => 'required',
            'nama_akun' => 'required',
            'kategori_id' => 'required',
            'jumlah' => 'required',
        ];

        $request->validate($rules);

        $transaksi->kode = $request->kode;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->nama_akun = $request->nama_akun;
        $transaksi->kategori_id = $request->kategori_id;
        $transaksi->jumlah = $request->jumlah;

        if ($request->keterangan) {
            $transaksi->keterangan = $request->keterangan;
        }

        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Data Transaksi Berhasil Diupdate');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Data Transaksi Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    //
    public function index()
    {
        if (!$this->loginCustomerCheck()) return redirect()->route('customer.login')->with('error', 'Silahkan Login Terlebih Dahulu!');

        return view('pembelian', [
            "data" => Pembelian::where('user_id', Auth::id())->orderby('id', "DESC")->get(),
        ]);
    }

    public function beli(Catalog $katalog)
    {
        if (!$this->loginCustomerCheck()) return redirect()->route('customer.login')->with('error', 'Silahkan Login Terlebih Dahulu!');
       
        $pembelian = new Pembelian;
        $pembelian->user_id = Auth::id();
        $pembelian->katalog_id = $katalog->id;
        $pembelian->tanggal_pembelian = date("Y-m-d");
        $pembelian->status_return = 0;
        $pembelian->tanggal_return = date("Y-m-d");
        $pembelian->save();

        return redirect()->route('customer.pembelian')->with('success', 'Pembelian Berhasil!');
    }

    public function return_barang(Pembelian $pembelian)
    {
        if (!$this->loginCustomerCheck()) return redirect()->route('customer.login')->with('error', 'Silahkan Login Terlebih Dahulu!');
       
        $pembelian->status_return = 1;
        $pembelian->tanggal_return = date("Y-m-d");
        $pembelian->save();

        return redirect()->route('customer.pembelian')->with('success', 'Pembelian Berhasil Direturn!');
    }

    public function batal(Pembelian $pembelian)
    {
        if (!$this->loginCustomerCheck()) return redirect()->route('customer.login')->with('error', 'Silahkan Login Terlebih Dahulu!');
       
        $pembelian->delete();

        return redirect()->route('customer.pembelian')->with('success', 'Pembelian Berhasil Dibatalkan!');
    }

    public function loginCustomerCheck(): bool
    {
        return Auth::check();
    }
}

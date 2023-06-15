<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Neraca;

class NeracaController extends Controller
{
    //
    public function index()
    {
        return view('neraca.index',
            [
                'title' => "Data Neraca",
                'data' => Neraca::orderby('id', 'DESC')->get(),
            ]);
    }

    public function create()
    {
        return view('neraca.create',
            [
                'title' => "Tambah Data Neraca",
            ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nomor' => 'required',
            'nama_akun' => 'required',
            'tanggal' => 'required|date',
        ];

        if ($request->debit) {
            $rules['debit'] = 'int';
        }

        if ($request->kredit) {
            $rules['kredit'] = 'int';
        }

        $request->validate($rules);

        $neraca = new Neraca;
        $neraca->nomor = $request->nomor;
        $neraca->nama_akun = $request->nama_akun;
        $neraca->debit = $request->debit ?? 0;
        $neraca->kredit = $request->kredit ?? 0;
        $neraca->tanggal = $request->tanggal;
        $neraca->save();

        return redirect()->route('neraca.index')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit(Neraca $neraca)
    {
        return view('neraca.edit',
            [
                'data' => $neraca,
                'title' => "Update Data",
            ]);
    }

    public function update(Neraca $neraca, Request $request)
    {
        $rules = [
            'nomor' => 'required',
            'nama_akun' => 'required',
            'tanggal' => 'required|date',
        ];

        if ($request->debit) {
            $rules['debit'] = 'int';
        }

        if ($request->kredit) {
            $rules['kredit'] = 'int';
        }

        $request->validate($rules);

        $neraca->nomor = $request->nomor;
        $neraca->nama_akun = $request->nama_akun;
        $neraca->debit = $request->debit ?? 0;
        $neraca->kredit = $request->kredit ?? 0;
        $neraca->tanggal = $request->tanggal;
        $neraca->save();

        return redirect()->route('neraca.index')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy(Neraca $neraca)
    {
        $neraca->delete();

        return redirect()->route('neraca.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function toExcel()
    {
        return view('neraca.excel',
            [
                'data' => Neraca::orderby('id', 'DESC')->get(),
            ]);
    }
}

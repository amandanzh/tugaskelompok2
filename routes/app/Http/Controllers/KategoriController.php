<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    //
    public function index()
    {
        return view('kategori.index',
            [
                'title' => "Data Kategori",
                'data' => Kategori::orderby('id', 'DESC')->get(),
            ]);
    }

    public function create()
    {
        return view('kategori.create',
            [
                'title' => "Tambah Data Kategori",
            ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $kat = new Kategori;
        $kat->name = $request->name;
        $kat->save();

        return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Ditambah');
    }

    public function edit(Kategori $kategori)
    {
        return view('kategori.edit',
            [
                'data' => $kategori,
                'title' => "Update Data Kategori",
            ]);
    }

    public function update(Kategori $kategori, Request $request)
    {
        $rules = [
            'name' => 'required',
        ];

        $request->validate($rules);

        $kategori->name = $request->name;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Diupdate');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Data kategori Berhasil Dihapus');
    }
}

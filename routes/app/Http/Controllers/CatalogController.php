<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use Illuminate\Support\Facades\File;

use App\Models\Pembelian;

class CatalogController extends Controller
{
    //
    public function index()
    {
        return view('catalog.index',  [
            'title' => "Data Katalog",
            'data' => Catalog::orderby('id', 'DESC')->get(),
        ]);
    }

    public function create()
    {
        return view('catalog.create',  [
            'title' => "Tambah Data Katalog",
        ]);
    }

    public function store(Request $request)
    {
         $rules = [
            'nama' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
        ];

        $request->validate($rules);

        $catalog = new Catalog;
        $catalog->nama = $request->nama;
        $catalog->harga = $request->harga;

        $filename = '';

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename .= $file->hashName();
            $path = $file->move('img', $filename);
        }

        $catalog->img = $filename;
        $catalog->save();

        return redirect()->route('katalog.index')->with('success', 'Katalog Berhasil Ditambah!');
    }

    public function edit($id)
    {
        $catalog = Catalog::find($id);

        return view('catalog.edit', [
            'title' => "Edit Katalog",
            'data' => $catalog,
        ]);
    }

    public function update(Request $request ,$id)
    {
        $rules = [
            'nama' => 'required',
            'harga' => 'required',
        ];

        $request->validate($rules);

        $catalog = Catalog::find($id);
        $catalog->nama = $request->nama;
        $catalog->harga = $request->harga;

        if ($request->file('gambar')) {

            File::delete('img/' . $catalog->img);

            $file = $request->file('gambar');
            $filename = $file->hashName();
            $path = $file->move('img', $filename);
            $catalog->img = $filename;
        }

        $catalog->save();

        return redirect()->route('katalog.index')->with('success', 'Katalog Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $catalog = Catalog::find($id);
        File::delete('img/' . $catalog->img);

        Pembelian::where('katalog_id', $id)->delete();
        $catalog->delete();

        return redirect()->route('katalog.index')->with('success', 'Katalog Berhasil Dihapus!');
    }

    public function customer()
    {
        return view('catalog',  [
            'title' => "Data Katalog",
            'data' => Catalog::orderby('id', 'DESC')->get(),
        ]);
    }
}

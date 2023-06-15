<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    //
    public function index()
    {
        return view('pengguna.index',
            [
                'title' => "Data Pengguna",
                'data' => User::where('role', 'Admin')->orderby('id', 'DESC')->get(),
            ]);
    }

    public function create()
    {
        return view('pengguna.create',
            [
                'title' => "Tambah Data Pengguna",
            ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|min:3|max:30',
            'password' => 'required|min:3|max:30',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('pengguna.index')->with('success', 'Data Pengguna Berhasil Ditambah');
    }

    public function edit(User $user)
    {
        return view('pengguna.edit',
            [
                'data' => $user,
                'title' => "Update Data Pengguna",
            ]);
    }

    public function update(User $user, Request $request)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required|min:3|max:16',
        ];

        if ($request->password) {
            $rules['password']  = 'min:3|max:16';
        }

        $request->validate($rules);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('pengguna.index')->with('success', 'Data Pengguna Berhasil Diupdate');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('pengguna.index')->with('success', 'Data Pengguna Berhasil Dihapus');
    }
}

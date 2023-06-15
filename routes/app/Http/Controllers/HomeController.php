<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->role != "Admin")  return redirect()->route('login')->with('error', "Silahkan Login Sebagai Admin!");

        return view('home', [
            'pengguna' => count(User::where('role', 'Admin')->get()),
            'kategori' => count(kategori::get()),
            'title' => 'Dashboard'
        ]);
    }
}

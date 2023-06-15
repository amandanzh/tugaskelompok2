<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.index', [
      'title' => 'Login',
      'active' => 'login',
    ]);
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'username' => 'required',
      'password' => 'required|min:3|max:16',
    ]);

    // Jika Login Benar maka akan redirect melalui middleware dulu
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return back()->with('success', 'Login Berhasil!');
    }

    // Gagal login? kembali ke halaman login beserta data
    return back()->with('error', 'Username atau Password Salah!');
  }

  public function logout()
  {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
  }
}

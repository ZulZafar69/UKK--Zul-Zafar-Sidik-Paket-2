<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('masyarakat.auth.login');
    }

    public function store(Request $request)
    {
        $login = $request->validate([
            'nik' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login berhasil!');
        } else {
            return back()->with('loginError', 'Login gagal, Coba Lagi');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}

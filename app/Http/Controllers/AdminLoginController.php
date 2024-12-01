<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{

    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial dengan guard 'admin'
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard'); // Redirect ke dashboard
        }


        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    // Dashboard admin
    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function logout(Request $request)
    {
        // Logout admin
        Auth::guard('admin')->logout();

        // Hapus semua sesi yang terkait
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect()->route('admin.login');
    }
}

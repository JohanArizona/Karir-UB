<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\JenjangPendidikan;

class RegisteredUserController extends Controller
{
    public function showStep1()
    {
        return view('auth.register_1'); // Form pertama
    }

    public function processStep1(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255', // Full Name
            'email' => 'required|email|unique:users,email', // Email Address
            'password' => 'required|min:6', // Create Password
            'tanggal_lahir' => 'required|date', // Birth Date
            'nomer_telpon' => 'nullable|numeric', // Phone Number
        ]);
    
        // Simpan data di session
        $request->session()->put('register', $request->except('_token', 'password'));
        $request->session()->put('register_password', Hash::make($request->password));
    
        return redirect()->route('register.showStep2');
    }

    public function showStep2()
    {
        if (!session()->has('register')) {
            return redirect()->route('register.showStep1');
        }

        return view('auth.register_2'); // Form kedua
    }

    public function completeRegistration(Request $request)
    {
        $request->validate([
            'NIA' => 'required|string|max:255', // Alumni Number
            'fakultas' => 'required|string|max:255', // Faculty
            'program_studi' => 'required|string|max:255', // Major
            'tahun_lulus' => 'required|numeric|min:1900|max:' . date('Y'), // Graduation Year
            'kota' => 'required|string|max:255', // Location
        ]);
    
        // Gabungkan data dari session dan form kedua
        $data = array_merge(session('register'), $request->except('_token'));
        $data['password'] = session('register_password');
    
        // Simpan data pengguna ke tabel users
        $user = User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => $data['password'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'nomer_telpon' => $data['nomer_telpon'],
            'NIA' => $request->NIA, // Alumni Number
            'kota' => $request->kota, // Location
        ]);
    
        // Simpan data pendidikan ke tabel jenjang_pendidikan
        JenjangPendidikan::create([
            'id_user' => $user->id_user,
            'fakultas' => $request->fakultas, // Faculty
            'program_studi' => $request->program_studi, // Major
            'tahun_lulus' => $request->tahun_lulus, // Graduation Year
        ]);
    
        // Hapus data dari session
        $request->session()->forget(['register', 'register_password']);
    
        return redirect()->route('register.showStep2')->with('success', 'Registration completed successfully.');
    }
}

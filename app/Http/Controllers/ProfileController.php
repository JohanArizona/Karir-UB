<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\JenjangPendidikan;

class ProfileController extends Controller
{
    // Menampilkan profil dan jenjang pendidikan
    public function index()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        $jenjangPendidikan = JenjangPendidikan::where('id_user', $user->id_user)->first(); // Mengambil data jenjang pendidikan yang terkait dengan user
        
        return view('profile', compact('user', 'jenjangPendidikan'));
    }

    // Memperbarui profil dan jenjang pendidikan
    public function update(Request $request)
    {
        $user = Auth::user();
        $jenjangPendidikan = JenjangPendidikan::where('id_user', $user->id_user)->first();

        // Validasi inputan untuk user
        $validatedUser = $request->validate([
            'NIA' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id_user.',id_user',
            'nomer_telpon' => 'nullable|string',
            'kota' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
        ]);

        // Validasi inputan untuk jenjang pendidikan
        $validatedJenjang = $request->validate([
            'fakultas' => 'nullable|string|max:255',
            'program_studi' => 'nullable|string|max:255',
            'tahun_lulus' => 'required|numeric|min:1900|max:' . date('Y'),
        ]);

        // Memperbarui data user
        $user->update([
            'NIA' => $validatedUser['NIA'],
            'nama' => $validatedUser['nama'],
            'email' => $validatedUser['email'],
            'nomer_telpon' => $validatedUser['nomer_telpon'],
            'kota' => $validatedUser['kota'],
            'tanggal_lahir' => $validatedUser['tanggal_lahir'],
        ]);

        // Memperbarui data jenjang pendidikan
        if ($jenjangPendidikan) {
            $jenjangPendidikan->update([
                'fakultas' => $validatedJenjang['fakultas'],
                'program_studi' => $validatedJenjang['program_studi'],
                'tahun_lulus' => $validatedJenjang['tahun_lulus'],
            ]);
        }

        // Redirect setelah update
        return redirect()->route('profile')->with('status', 'Profile updated successfully!');
    }
}


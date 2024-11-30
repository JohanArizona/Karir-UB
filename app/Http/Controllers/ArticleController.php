<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelBerita; // Jangan lupa untuk mengimport model

class ArticleController extends Controller
{
    public function index()
    {
        // Mengambil semua artikel
        $articles = ArtikelBerita::all(); // Anda bisa menambahkan pagination jika dibutuhkan
    
        // Mengirimkan data ke view dashboard
        return view('admin.dashboard', compact('articles'));
    }
    

    public function create()
    {
        // Pastikan hanya admin yang dapat mengakses
        if (!auth()->guard('admin')->check()) {
            abort(403, 'Unauthorized action.');
        }

        return view('add_article'); // Pastikan nama view sesuai
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'cover_image' => 'required|image|max:10240', // Maksimum 10 MB
        ]);

        // Simpan data artikel
        $article = new ArtikelBerita(); // Gunakan model yang sudah dibuat
        $article->judul = $validated['title'];
        $article->deskripsi = $validated['description'];
        $article->isi_artikel = $validated['content'];

        // Proses upload gambar
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('articles', 'public');
            $article->gambar = $path;
        }

        $article->tgl_post = now();
        $article->save();

        return redirect()->route('articles.create')->with('success', 'You have added a new article!');
    }

    //Edit Artikel
    public function edit($id)
    {
        // Ambil artikel berdasarkan ID
        $artikel = ArtikelBerita::findOrFail($id);
    
        // Kirim data artikel ke view edit
        return view('admin.edit_article', compact('artikel'));
    }    

    //Update Artikel
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'isi_artikel' => 'required|string',
            'gambar' => 'nullable|image|max:10240', // Maks 10 MB
        ]);
    
        // Ambil artikel berdasarkan ID
        $artikel = ArtikelBerita::findOrFail($id);
    
        // Update data
        $artikel->judul = $validated['judul'];
        $artikel->deskripsi = $validated['deskripsi'];
        $artikel->isi_artikel = $validated['isi_artikel'];
    
        // Jika ada gambar baru, upload dan update
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            $artikel->gambar = $path;
        }
    
        $artikel->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil diperbarui!');
    }

    //Hapus Artikel
    public function destroy($id)
    {
        // Cari artikel berdasarkan ID
        $artikel = ArtikelBerita::findOrFail($id);
    
        // Hapus file gambar jika ada
        if ($artikel->gambar && \Storage::exists('public/' . $artikel->gambar)) {
            \Storage::delete('public/' . $artikel->gambar);
        }
    
        // Hapus artikel dari database
        $artikel->delete();
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil dihapus!');
    }
    
    
}



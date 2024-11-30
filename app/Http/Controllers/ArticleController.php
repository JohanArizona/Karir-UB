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
    public function edit($id_artikel)
    {
        // Ambil artikel berdasarkan id_artikel
        $artikel = ArtikelBerita::findOrFail($id_artikel);
    
        // Kirim artikel ke view
        return view('admin.articles.edit', compact('artikel'));
    }
    
    //Update Artikel
    public function update(Request $request, $id_artikel)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'isi_artikel' => 'required|string', 
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
    
        // Cari artikel berdasarkan id_artikel
        $artikel = ArtikelBerita::findOrFail($id_artikel);
    
        // Jika ada gambar yang diupload
        if ($request->hasFile('cover_image')) {
            // Hapus gambar lama jika ada
            if ($artikel->gambar && file_exists(storage_path('app/public/'.$artikel->gambar))) {
                unlink(storage_path('app/public/'.$artikel->gambar));
            }
    
            // Simpan gambar baru
            $gambarPath = $request->file('cover_image')->store('images', 'public');
            $artikel->gambar = $gambarPath;
        }
    
        // Update artikel (termasuk isi_artikel)
        $artikel->update([
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
            'isi_artikel' => $validated['isi_artikel'], // Menambahkan update untuk isi artikel
        ]);
    
        // Redirect ke halaman yang diinginkan
        return redirect()->route('articles.edit', $id_artikel)->with('success', 'Article has been successfully updated');
    }
    
    

    //Hapus Artikel
    public function destroy($id_artikel)
    {
        // Cari artikel berdasarkan id_artikel
        $article = ArtikelBerita::find($id_artikel);
    
        if ($article) {
            // Hapus artikel
            $article->delete();
            return redirect()->route('admin.dashboard')->with('success', 'Artikel berhasil dihapus');
        }
    
        return redirect()->route('admin.dashboard')->with('error', 'Artikel tidak ditemukan');
    }
    
    
    
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelBerita; // Jangan lupa untuk mengimport model

class ArticleController extends Controller
{
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
}



@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Edit Artikel</h1>

        <!-- Form Edit Artikel -->
        <form action="{{ route('articles.update', $artikel->id_artikel) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block text-sm font-bold mb-2">Judul Artikel</label>
                <input type="text" id="judul" name="judul" value="{{ $artikel->judul }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-bold mb-2">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="3"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>{{ $artikel->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label for="isi_artikel" class="block text-sm font-bold mb-2">Isi Artikel</label>
                <textarea id="isi_artikel" name="isi_artikel" rows="6"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>{{ $artikel->isi_artikel }}</textarea>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-sm font-bold mb-2">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection

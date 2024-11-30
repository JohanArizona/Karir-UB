<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelBerita extends Model
{
    use HasFactory;

    protected $table = 'artikel_berita';
    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'judul', 
        'deskripsi', 
        'isi_artikel', 
        'gambar', 
        'tgl_post',
    ];

    public $timestamps = true;
}

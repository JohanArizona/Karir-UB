<?php

// app/Models/Loker.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'loker';

    protected $fillable = [
        'nama_perusahaan', 'nama_loker', 'workshift', 'kategori', 
        'jenjang_minimum', 'maksimal_usia', 'deskripsi', 'kota', 
        'gaji', 'alamat_perusahaan', 'no_telp_perusahaan', 'status_loker', 'logo_company'
    ];
}



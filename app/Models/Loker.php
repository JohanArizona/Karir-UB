<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'loker';
    protected $primaryKey = 'id_loker';
    public $timestamps = true;

    protected $fillable = [
        'nama_perusahaan', 'nama_loker', 'workshift', 'jenjang_minimum', 
        'tipe', 'gaji', 'maksimal_usia', 'deskripsi', 'kota', 
        'alamat_perusahaan', 'logo_company', 'status_loker', 'no_telp_perusahaan',
    ];    
}
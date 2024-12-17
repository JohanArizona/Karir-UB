<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class JenjangPendidikan extends Model
{
    protected $table = 'jenjang_pendidikan';
    protected $primaryKey = 'id_jenjang_pendidikan';
    
    protected $fillable = [
        'id_user', 'fakultas', 'program_studi', 'tahun_lulus',
    ];

    // Relasi dengan tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}

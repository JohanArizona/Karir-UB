<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_user';
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom yang dapat diisi
    protected $fillable = [
        'NIA',
        'nama',
        'email',
        'password',
        'nomer_telpon',
        'kota',
        'tanggal_lahir',
    ];

    // Relasi dengan tabel jenjang_pendidikan
    public function pendidikan()
    {
        return $this->hasMany(JenjangPendidikan::class, 'id_user');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
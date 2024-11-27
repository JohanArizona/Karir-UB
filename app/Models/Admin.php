<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin'; // Nama tabel
    protected $primaryKey = 'id_admin'; // Primary key
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom yang dapat diisi
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // Kolom yang disembunyikan
    protected $hidden = [
        'password',
        'remember_token',
    ];
}

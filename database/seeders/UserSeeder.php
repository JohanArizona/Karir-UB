<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'NIA' => '20210101',
                'nama' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password123'), // Pastikan menggunakan Hash untuk enkripsi password
                'nomer_telpon' => '08123456789',
                'kota' => 'Jakarta',
                'tanggal_lahir' => '1990-01-01', // Tanggal lahir John Doe
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'NIA' => '20210102',
                'nama' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'password' => Hash::make('password456'), // Enkripsi password
                'nomer_telpon' => '08234567890',
                'kota' => 'Bandung',
                'tanggal_lahir' => '1992-02-02', // Tanggal lahir Jane Doe
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'NIA' => '20210103',
                'nama' => 'Budi Santoso',
                'email' => 'budisantoso@example.com',
                'password' => Hash::make('password789'), // Enkripsi password
                'nomer_telpon' => '08345678901',
                'kota' => 'Surabaya',
                'tanggal_lahir' => '1988-03-03', // Tanggal lahir Budi Santoso
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

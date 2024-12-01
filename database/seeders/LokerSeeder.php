<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokerSeeder extends Seeder
{
    public function run()
    {
        DB::table('loker')->insert([
            'nama_perusahaan' => 'Mitsubishi Motors Indonesia',
            'nama_loker' => 'HR Officer',
            'workshift' => 'Full-time',
            'tipe' => 'Onsite',
            'kategori' => null,
            'jenjang_minimum' => 'S1',
            'maksimal_usia' => 26,
            'deskripsi' => 'Manage employee records and ensure compliance with HR policies. Handle recruitment processes, including posting job ads and screening candidates. Conduct orientation sessions for new hires. Oversee payroll and employee benefits administration. Address employee grievances and provide support. Assist in the development and implementation of HR strategies.',
            'kota' => 'Bandung',
            'gaji' => 4700000,
            'alamat_perusahaan' => 'Jl. Asia Afrika No. 8, Bandung, 40111, Indonesia',
            'no_telp_perusahaan' => null,
            'logo_company' => null,
            'status_loker' => 'Aktif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel Users
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('NIA')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');  
            $table->string('nomer_telpon')->nullable();
            $table->string('kota')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->timestamps();
        });

        // Tabel Jenjang Pendidikan
        Schema::create('jenjang_pendidikan', function (Blueprint $table) {
            $table->id('id_jenjang_pendidikan');
            $table->unsignedBigInteger('id_user');
            $table->string('fakultas');
            $table->string('program_studi');
            $table->year('tahun_lulus');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel Admin
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');  // Ganti 'kata_sandi' menjadi 'password'
            $table->timestamps();
        });

        // Tabel Loker
        Schema::create('loker', function (Blueprint $table) {
            $table->id('id_loker');
            $table->timestamp('tgl_post')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nama_perusahaan');
            $table->string('nama_loker');
            $table->enum('workshift', ['Full-time', 'Part-time', 'Internship', 'Contract']);
            $table->enum('tipe', ['Onsite', 'Hybrid', 'Remote']);
            $table->string('kategori')->nullable();
            $table->enum('jenjang_minimum', ['D3', 'D4', 'S1', 'S2', 'S3'])->nullable();
            $table->integer('maksimal_usia')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('gaji')->nullable();
            $table->text('alamat_perusahaan')->nullable();
            $table->string('no_telp_perusahaan')->nullable();
            $table->string('logo_company')->nullable();
            $table->enum('status_loker', ['Aktif', 'Non-Aktif'])->default('Aktif');
            $table->timestamps();
        });


        // Tabel Bookmark Loker
        Schema::create('bookmark_loker', function (Blueprint $table) {
            $table->id('id_bookmark');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_loker');
            $table->timestamp('tgl_bookmark')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_loker')->references('id_loker')->on('loker')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel Artikel Berita
        Schema::create('artikel_berita', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->timestamp('tgl_post')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->text('isi_artikel')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel_berita');
        Schema::dropIfExists('bookmark_loker');
        Schema::dropIfExists('loker');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('jenjang_pendidikan');
        Schema::dropIfExists('users');
    }
};

<?php

// User Login
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Login 
use App\Http\Controllers\AdminLoginController;

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->middleware('auth:admin')->name('admin.dashboard');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::middleware(['auth:admin'])->group(function () {
Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard');
});

use App\Http\Controllers\JobController;

// Admin Upload Jobs
Route::prefix('admin')->middleware(['auth:admin'])->group(function() {
    // Step 1: Menampilkan form
    Route::get('/jobs/create/step1', [JobController::class, 'createStep1'])->name('admin.jobs.create.step1');
    // Step 1: Menyimpan data ke session
    Route::post('/jobs/create/step1', [JobController::class, 'storeStep1']);
    
    // Step 2: Menampilkan form lanjutan
    Route::get('/jobs/create/step2', [JobController::class, 'createStep2'])->name('admin.jobs.create.step2');
    // Step 2: Menyimpan data ke database
    Route::post('/jobs/create', [JobController::class, 'store'])->name('admin.jobs.store');

    //Hapus Loker
    Route::delete('/loker/{id}', [JobController::class, 'destroy'])->name('admin.loker.destroy');

    //Edit Loker
    Route::get('/loker/{id_loker}/edit', [JobController::class, 'edit'])->name('admin.loker.edit');

    //Update Loker
    Route::put('/loker/{id_loker}', [JobController::class, 'update'])->name('admin.loker.update');
});

// Admin Mengelola Artikel
use App\Http\Controllers\ArticleController;

Route::prefix('admin')->middleware(['auth:admin'])->group(function() {
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    
    // Dashboard untuk menampilkan daftar artikel
    Route::get('/dashboard', [ArticleController::class, 'index'])->name('admin.dashboard');

    // Route untuk halaman edit artikel
    Route::get('/articles/{id_artikel}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    
    // Route untuk halaman update artikel
    Route::put('/articles/{id_artikel}', [ArticleController::class, 'update'])->name('articles.update');

    // Route untuk Delete
    Route::delete('/articles/{id_artikel}', [ArticleController::class, 'destroy'])->name('articles.destroy');

});

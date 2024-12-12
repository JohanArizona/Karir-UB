<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ArticleController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/dashboard', [JobController::class, 'dashboardUser'])->name('dashboard');
    //Search Loker Setelah Login
    Route::get('user/search', [JobController::class, 'searchLogin'])->name('search.lokerLogin');
    Route::get('/articles', [ArticleController::class, 'userArticle'])->name('userArticles');
});

require __DIR__.'/auth.php';

//Search Loker Sebelum Login
Route::get('guest/search', [JobController::class, 'search'])->name('search.loker');

// Admin Login 
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->middleware('auth:admin')->name('admin.dashboard');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::middleware(['auth:admin'])->group(function () {
Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard');
});

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

    //Hapus Loker Dari Halaman Jobs
    Route::delete('/jobs/{id}', [JobController::class, 'adminHapusJobs'])->name('admin.hapusJobs');

    //Hapus Loker Dari Dashboard
    Route::delete('/loker/{id}', [JobController::class, 'destroy'])->name('admin.loker.destroy');

    //Edit Loker
    Route::get('/loker/{id_loker}/edit', [JobController::class, 'edit'])->name('admin.loker.edit');

    //Update Loker
    Route::put('/loker/{id_loker}', [JobController::class, 'update'])->name('admin.loker.update');

    Route::get('/admin/jobs', [JobController::class, 'adminJobs'])->name('adminJob');
});



// Admin Mengelola Artikel
Route::prefix('admin')->middleware(['auth:admin'])->group(function() {
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    
    // Dashboard untuk menampilkan daftar artikel
    Route::get('/dashboard', [ArticleController::class, 'index'])->name('admin.dashboard');

    //Navbar Articles
    Route::get('/articles', [ArticleController::class, 'adminArticle'])->name('adminArticles');

    // Route untuk halaman edit artikel
    Route::get('/articles/{id_artikel}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    
    // Route untuk halaman update artikel
    Route::put('/articles/{id_artikel}', [ArticleController::class, 'update'])->name('articles.update');

    // Route untuk Delete Dari Dashboard
    Route::delete('/articles/{id_artikel}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    // Route untuk Delete dari Halaman Articles
    Route::delete('/articles/delete/{id_artikel}', [ArticleController::class, 'adminHapusArticles'])->name('admin.HapusArticles');

});

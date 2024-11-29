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

// Admin Upload Jobs
use App\Http\Controllers\JobController;

Route::prefix('admin')->middleware(['auth:admin'])->group(function() {
    // Step 1: Menampilkan form
    Route::get('/jobs/create/step1', [JobController::class, 'createStep1'])->name('admin.jobs.create.step1');
    // Step 1: Menyimpan data ke session
    Route::post('/jobs/create/step1', [JobController::class, 'storeStep1']);
    
    // Step 2: Menampilkan form lanjutan
    Route::get('/jobs/create/step2', [JobController::class, 'createStep2'])->name('admin.jobs.create.step2');
    // Step 2: Menyimpan data ke database
    Route::post('/jobs/create', [JobController::class, 'store'])->name('admin.jobs.store');
});


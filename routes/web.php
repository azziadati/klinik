<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KepalaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\ConsultationController;
// Route untuk halaman utama
Route::get('/', function () {
    return view('landing');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::middleware(['auth', 'role:pasien'])->group(function () {
    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.dashboard');
    // Tambahkan rute lain untuk pasien di sini
});

Route::middleware(['auth', 'role:administrasi'])->group(function () {
    Route::get('/administrasi', [AdministrasiController::class, 'index'])->name('administrasi.dashboard');
    // Tambahkan rute lain untuk administrasi di sini
});

Route::middleware(['auth', 'role:kepala klinik'])->group(function () {
    Route::get('/kepala', [KepalaController::class, 'index'])->name('kepala.dashboard');
    // Tambahkan rute lain untuk kepala klinik di sini
});


// Dashboard
Route::post('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk halaman Reservasi
Route::get('/reservasi', [ReservationController::class, 'index'])->name('reservasi.index');
Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservasi.store');

// Route untuk halaman konsultasi
Route::middleware('auth')->group(function () {
    Route::get('/consultations', [ConsultationController::class, 'index'])->name('consultations.index');
    Route::post('/consultations', [ConsultationController::class, 'store'])->name('consultations.store');
});

// Route untuk halaman kontak
Route::get('/kontak', function () {
    return view('kontak');
});
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::middleware('auth')->group(
    function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        // ADMIN
        Route::middleware('role:Admin')->group(function () {
            // User
            Route::get('/user', [UserController::class, 'index'])->name('user.index');
            Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/user', [UserController::class, 'store'])->name('user.store');
            Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
            Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

            // Role
            Route::get('/role', [RoleController::class, 'index'])->name('role.index');
            Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
            Route::post('/role', [RoleController::class, 'store'])->name('role.store');
            Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
            Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
            Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
        });
    }
);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');


Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('admin.mahasiswa.index');
    Route::get('/admin/mahasiswa/{id}',[MahasiswaController::class, 'details'])->name('admin.mahasiswa.details');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');


Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.'
    ], function () {
        Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
        Route::get('mahasiswa/{id}', [MahasiswaController::class, 'detail'])->name('mahasiswa.details');
    });
});

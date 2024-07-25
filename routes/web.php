<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KaprodiController;

// Route::get('/', function () {
//     return view('welcome');
// });

// AUTH
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'do_login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/user-register', [AuthController::class, "user_register"])->name('user.register');
Route::post('/user-register', [AuthController::class, "do_user_register"])->name('do.user.register');

// kaprodi
Route::prefix('kaprodi')
    ->middleware(['auth:kaprodi'])
    ->group(function () {
        Route::get('/dashboard', [KaprodiController::class, 'dashboard']);
    });

// mahasiswa
Route::prefix('mahasiswa')
    ->middleware(['auth:web'])
    ->group(function () {
        // 
    });


Route::get('/', [HomeController::class, 'index']);
Route::get('/lomba', [LombaController::class, 'index']);
Route::get('/jurnal', [JurnalController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::view('/visi-misi', 'user.visi-misi');
Route::view('/aproval', 'user.aproval');

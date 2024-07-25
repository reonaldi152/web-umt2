<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\JurnalController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/lomba', [LombaController::class, 'index']);
Route::get('/jurnal', [JurnalController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::view('/visi-misi', 'user.visi-misi');
Route::view('/aproval', 'user.aproval');


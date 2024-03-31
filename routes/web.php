<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MataPelajaranController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/kelas', [KelasController::class, 'index'])->middleware('auth');
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::get('/matapelajaran', [MataPelajaranController::class, 'index'])->middleware('auth');
Route::get('/siswa', [SiswaController::class, 'index'])->middleware('auth');
Route::get('/youtube', [YoutubeController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store'])->middleware('guest');


// Route::get('/kelas/{kelas:id}', [KelasController::class, 'index']);
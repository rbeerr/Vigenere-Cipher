<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecryptionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/decrypt', [DecryptionController::class, 'decrypt'])->name('decrypt');
Route::post('/encrypt', [DecryptionController::class, 'encrypt'])->name('encrypt');
Route::post('/process', [DecryptionController::class, 'process'])->name('process');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

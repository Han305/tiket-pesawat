<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'tiket'])->name('pesan.tiket');
Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard');
Route::post('/tiket/store', [PostController::class, 'store'])->name('proses.tiket');
Route::get('/sukses', [PostController::class, 'sukses'])->name('sukses');
Route::get('/tiket/edit/{id}', [PostController::class,'edit'])->name('tiket.edit');
Route::put('/tiket/{id}', [PostController::class,'update'])->name('tiket.update');
Route::get('/tiket/hapus/{id}', [PostController::class,'destroy'])->name('tiket.destroy');
Route::get('/tiket/cetak_pdf', [PostController::class,'cetak_pdf'])->name('tiket.cetak_pdf');
Route::get('/tiket/cetak', [PostController::class,'cetak'])->name('tiket.cetak');
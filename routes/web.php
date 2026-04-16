<?php

use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\RekapBelanja;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuUsers;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OmprengController;
use App\Http\Controllers\OperasionalController;
use App\Http\Controllers\RekapOperasional;
use App\Http\Controllers\ItemMenu;


// route untuk halaman utama
Route::get('/', function () {
    return view('Home');
})->name('home');

// route untuk halaman biaya bahan (belanja)
Route::resource('belanja', BelanjaController::class);

// route untuk halaman rekap belanja
Route::get('/rekap-belanja', [RekapBelanja::class, 'index'])->name('rekap_belanja');

// route untuk halaman manajemen pengguna
Route::get('/password', [MenuUsers::class, 'index'])->name('users.index');
Route::put('/password/{id}', [MenuUsers::class, 'update'])->name('users.update');

// route untuk halaman kategori
Route::resource('kategori', KategoriController::class);

// route untuk halaman ompreng
Route::resource('ompreng', OmprengController::class);

// route untuk halaman operasional
Route::resource('operasional', OperasionalController::class);

// route untuk halaman rekap operasional
Route::get('/rekap-operasional', [RekapOperasional::class, 'index'])
    ->name('rekap.operasional');

// route untuk halaman item menu
Route::get('/item-menu', [ItemMenu::class, 'index'])->name('item.index');
Route::post('/item-menu/store', [ItemMenu::class, 'store'])->name('item.store');
Route::delete('/item-menu/{id}', [ItemMenu::class, 'destroy'])->name('item.destroy');
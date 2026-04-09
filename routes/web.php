<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::prefix('admin')->group(function () {
    
    // Ke admin/dashboard.blade.php
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Ke admin/bookings.blade.php (Gunakan ini untuk tombol sidebar)
    Route::get('/bookings', function () {
        return view('admin.bookings');
    })->name('bookings.index');

    // Ke admin/services.blade.php
    Route::get('/services', function () {
        return view('admin.services');
    })->name('services.index');

    // Route untuk menampilkan halaman edit
Route::get('/admin/services/{id}/edit', function ($id) {
    // Nantinya di sini Anda akan mengambil data dari DB berdasarkan $id
    return view('admin.editservice'); 
})->name('services.edit');

    // Ke admin/customer.blade.php
    Route::get('/customers', function () {
        return view('admin.customer');
    })->name('customers.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-potongan', function () {
    return view('listpotongan');
})->name('listpotongan.index');

Route::get('/atur-jadwal', function () {
    return view('aturjadwal');
})->name('aturjadwal.index');
=======
use Laravel\Fortify\Features;

Route::inertia('/', 'dashboard', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
>>>>>>> 0a5a29f58d1eb073bb43845033db6a4243d82e1d

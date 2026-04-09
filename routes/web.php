<?php

use Illuminate\Support\Facades\Route;

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

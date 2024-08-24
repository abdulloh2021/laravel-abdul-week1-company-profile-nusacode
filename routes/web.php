<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/service', function () {
    return view('pages.service');
});


Route::get('contact', [ContactController::class, 'index']);
Route::post('contact/simpan', [ContactController::class, 'simpan'])->name('simpan-contact');
Route::get('contact/hapus/{id}', [ContactController::class, 'hapus'])->name('hapus-contact');
Route::get('contact/edit/{id}', [ContactController::class, 'edit'])->name('edit-contact');
Route::post('contact/update/{id}', [ContactController::class, 'update'])->name('update-contact');




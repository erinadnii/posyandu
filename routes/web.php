<?php

use Illuminate\Support\Facades\Route;

// Tahap 1: Halaman uji Design System & Layout Ramah Pra-Lansia
Route::get('/', function () {
    return view('design-system');
})->name('design-system');

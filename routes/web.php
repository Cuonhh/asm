<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\SearchController;



Route::get('/', [TinController::class, 'index'])->name('home');
Route::get('/tin/{id}', [TinController::class, 'chitiet'])->name('chitiet');
Route::get('/cat/{idLT}', [TinController::class, 'tintrongloai'])->name('tintrongloai');
Route::get('/search', [SearchController::class, 'search'])->name('search');

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('ficha/{id}',[\App\Http\Controllers\FichaController::class,'index'])->name('ficha');

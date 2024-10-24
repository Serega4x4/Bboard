<?php

use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [BbsController::class, 'index'])->name('index');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

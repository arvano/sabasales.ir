<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/request/{requestId}', [App\Http\Controllers\RequestController::class, 'create'])->name('register');
Route::post('/request', [App\Http\Controllers\RequestController::class, 'store'])->name('register.store');


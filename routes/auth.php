<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Login — URL discrète, non liée depuis le site public
Route::middleware('guest')->group(function () {
    Route::get('nico-admin/connexion',  [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('nico-admin/connexion', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

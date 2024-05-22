<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\SpecialMenuController;
use App\Http\Controllers\ColorSettingsController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/main-menu', [MainMenuController::class, 'index'])->name('main.menu');
    Route::get('/special-menu', [SpecialMenuController::class, 'index'])->name('special.menu');
    Route::get('/color-settings', [ColorSettingsController::class, 'showSettingsForm'])->name('color.settings.form');
    Route::post('/color-settings', [ColorSettingsController::class, 'storeSettings'])->name('color.settings.store');
});

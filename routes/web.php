<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\SpecialMenuController;
// use App\Http\Controllers\ColorSettingsController;
use App\Http\Controllers\ColorController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/main-menu', [MainMenuController::class, 'index'])->name('main.menu');
    Route::get('/special-menu', [SpecialMenuController::class, 'index'])->name('special.menu');
    // Route::get('/color-settings', [ColorSettingsController::class, 'showSettingsForm'])->name('color.settings.form');
    // Route::post('/color-settings', [ColorSettingsController::class, 'storeSettings'])->name('color.settings.store');
    // Route::post('/color-settings/reset', [ColorSettingsController::class, 'resetSettings'])->name('color.settings.reset');
    Route::get('/color-settings', [ColorController::class, 'index'])->name('color.settings');
    Route::post('/color-update', [ColorController::class, 'update'])->name('color.update');
    Route::post('/toggle-dark-mode', [ColorController::class, 'toggleDarkMode'])->name('color.toggleDarkMode');
    Route::post('/color-settings/reset', [ColorController::class, 'reset'])->name('color.reset');

});

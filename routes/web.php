<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // 追加

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/main-menu', function () {
    return view('main_menu');
})->name('main.menu');

Route::get('/special-menu', function () {
    return view('special_menu');
})->name('special.menu');

Route::get('/color-settings', [ColorController::class, 'index'])->name('color.settings');
Route::post('/color-update', [ColorController::class, 'update'])->name('color.update');
Route::post('/toggle-dark-mode', [ColorController::class, 'toggleDarkMode'])->name('color.toggleDarkMode');
Route::post('/color-settings/reset', [ColorController::class, 'reset'])->name('color.reset');

Auth::routes();

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

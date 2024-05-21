<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\SpecialMenuController;
use App\Http\Controllers\ColorSettingsController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/main-menu', [MainMenuController::class, 'showMainMenu'])->name('main.menu');
Route::get('/special-menu', [SpecialMenuController::class, 'showSpecialMenu'])->name('special.menu');
Route::get('/color-settings', [ColorSettingsController::class, 'showSettingsForm'])->name('color.settings.form');
Route::post('/color-settings/save', [ColorSettingsController::class, 'saveSettings'])->name('color.settings.save');
Route::get('/color-settings/reset', [ColorSettingsController::class, 'resetSettings'])->name('color.settings.reset');

Route::post('/goto-main', function () {
    return redirect()->route('main.menu');
})->name('goto.main');

?>

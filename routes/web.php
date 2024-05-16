<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/main-menu', function () {
    return view('main_menu');
})->name('main.menu');

Route::get('/special-menu', function () {
    return view('special_menu');
})->name('special.menu');

Route::post('/goto-main', function () {
    return redirect()->route('main.menu');
})->name('goto.main');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


?>


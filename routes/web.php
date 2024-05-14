<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/regular-menu', function () {
    return view('regular_menu');
})->name('regular.menu');

Route::get('/special-menu', function () {
    return view('special_menu');
})->name('special.menu');

Route::post('/goto-main', function () {
    return redirect()->route('regular.menu');
})->name('goto.main');

?>


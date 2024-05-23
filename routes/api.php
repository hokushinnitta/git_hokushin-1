<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorSettingsController;

Route::post('/color-settings', [ColorSettingsController::class, 'storeSettings']);
Route::post('/color-settings/reset', [ColorSettingsController::class, 'resetSettings']);

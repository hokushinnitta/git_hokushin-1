<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\ColorSetting;

Route::get('/color-settings', function () {
    return ColorSetting::first();
});

?>

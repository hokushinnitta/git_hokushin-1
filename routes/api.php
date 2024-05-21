<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\ColorSetting;

Route::get('/color-settings', function () {
    $settings = ColorSetting::first();

    if ($settings) {
        return response()->json($settings);
    } else {
        return response()->json([
            'header_color' => '#ffffff',
            'background_color' => '#000000',
            'font_color' => '#000000',
            'border_color' => '#000000',
            'button_color' => '#000000',
            'button_text_color' => '#ffffff',
            'input_color' => '#000000',
            'dark_header_color' => '#000000',
            'dark_background_color' => '#ffffff',
            'dark_font_color' => '#ffffff',
            'dark_border_color' => '#ffffff',
            'dark_button_color' => '#ffffff',
            'dark_button_text_color' => '#000000',
            'dark_input_color' => '#ffffff'
        ]);
    }
});

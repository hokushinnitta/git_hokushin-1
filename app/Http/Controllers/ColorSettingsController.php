<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColorSetting;

class ColorSettingsController extends Controller
{
    public function showSettingsForm()
    {
        $settings = ColorSetting::first();
        return view('color_settings', compact('settings'));
    }

    public function storeSettings(Request $request)
    {
        $settings = ColorSetting::first();
        $settings->update($request->all());
        return response()->json(['success' => true]);
    }

    public function resetSettings()
    {
        $settings = ColorSetting::first();
        $settings->update([
            'header_color' => '#ffffff',
            'background_color' => '#f8f9fa',
            'font_color' => '#000000',
            'border_color' => '#ced4da',
            'button_color' => '#007bff',
            'button_text_color' => '#ffffff',
            'input_color' => '#ffffff',
            'dark_header_color' => '#000000',
            'dark_background_color' => '#343a40',
            'dark_font_color' => '#ffffff',
            'dark_border_color' => '#495057',
            'dark_button_color' => '#6c757d',
            'dark_button_text_color' => '#ffffff',
            'dark_input_color' => '#495057'
        ]);
        return response()->json(['success' => true]);
    }
}

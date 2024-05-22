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
        $request->validate([
            'header_color' => 'required|string',
            'background_color' => 'required|string',
            'font_color' => 'required|string',
            'border_color' => 'required|string',
            'button_color' => 'required|string',
            'button_text_color' => 'required|string',
            'input_color' => 'required|string',
            'dark_header_color' => 'required|string',
            'dark_background_color' => 'required|string',
            'dark_font_color' => 'required|string',
            'dark_border_color' => 'required|string',
            'dark_button_color' => 'required|string',
            'dark_button_text_color' => 'required|string',
            'dark_input_color' => 'required|string',
        ]);

        $settings = ColorSetting::first();
        $settings->update([
            'header_color' => $request->header_color,
            'background_color' => $request->background_color,
            'font_color' => $request->font_color,
            'border_color' => $request->border_color,
            'button_color' => $request->button_color,
            'button_text_color' => $request->button_text_color,
            'input_color' => $request->input_color,
            'dark_header_color' => $request->dark_header_color,
            'dark_background_color' => $request->dark_background_color,
            'dark_font_color' => $request->dark_font_color,
            'dark_border_color' => $request->dark_border_color,
            'dark_button_color' => $request->dark_button_color,
            'dark_button_text_color' => $request->dark_button_text_color,
            'dark_input_color' => $request->dark_input_color,
        ]);

        return response()->json(['success' => true]);
    }
}

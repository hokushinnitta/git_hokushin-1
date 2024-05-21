<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\ColorSetting;

// class ColorSettingsController extends Controller
// {
//     public function showSettingsForm()
//     {
//         $settings = ColorSetting::all();
//         return view('color_settings', compact('settings'));
//     }

//     public function saveSettings(Request $request)
//     {
//         // カラー設定を保存するロジックをここに追加します。
//         foreach ($request->all() as $key => $value) {
//             ColorSetting::updateOrCreate(['key' => $key], ['value' => $value]);
//         }

//         return redirect()->route('color.settings.form')->with('success', '設定が保存されました。');
//     }

//     public function resetSettings()
//     {
//         // デフォルト設定にリセットするロジックをここに追加します。
//         ColorSetting::truncate();
//         return redirect()->route('color.settings.form')->with('success', '設定がリセットされました。');
//     }
// }




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

    public function saveSettings(Request $request)
    {
        $settings = ColorSetting::first();
        if (!$settings) {
            $settings = new ColorSetting();
        }
        $settings->header_color = $request->header_color;
        $settings->background_color = $request->background_color;
        $settings->font_color = $request->font_color;
        $settings->font_type = $request->font_type;
        $settings->font_size = $request->font_size;
        $settings->border_color = $request->border_color;
        $settings->button_color = $request->button_color;
        $settings->button_text_color = $request->button_text_color;
        $settings->input_color = $request->input_color;
        $settings->dark_header_color = $request->dark_header_color;
        $settings->dark_background_color = $request->dark_background_color;
        $settings->dark_font_color = $request->dark_font_color;
        $settings->dark_border_color = $request->dark_border_color;
        $settings->dark_button_color = $request->dark_button_color;
        $settings->dark_button_text_color = $request->dark_button_text_color;
        $settings->dark_input_color = $request->dark_input_color;
        $settings->save();

        return redirect()->route('color.settings.form')->with('success', 'Settings updated successfully!');
    }

    public function resetSettings()
    {
        ColorSetting::truncate();
        return redirect()->route('color.settings.form')->with('success', 'Settings reset successfully!');
    }
}

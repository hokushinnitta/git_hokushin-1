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

    public function saveSettings(Request $request)
    {
        $settings = ColorSetting::first();
        if (!$settings) {
            $settings = new ColorSetting();
        }
        $settings->fill($request->all());
        $settings->save();

        return redirect()->route('color.settings.form')->with('success', '設定が保存されました。');
    }

    public function resetSettings()
    {
        ColorSetting::truncate();
        return redirect()->route('color.settings.form')->with('success', '設定がリセットされました。');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ColorController extends Controller
{
    public function index()
    {
        $colors = json_decode(Storage::get('colors.json'), true) ?? config('colors.defaults');
        return view('color_settings', compact('colors'));
    }

    public function update(Request $request)
    {
        $colors = [
            'primary' => $request->input('primary'),
            'secondary' => $request->input('secondary'),
            'success' => $request->input('success'),
            'info' => $request->input('info'),
            'warning' => $request->input('warning'),
            'danger' => $request->input('danger'),
            'light' => $request->input('light'),
            'dark' => $request->input('dark'),
            'dark_primary' => $request->input('dark_primary'),
            'dark_secondary' => $request->input('dark_secondary'),
            'dark_success' => $request->input('dark_success'),
            'dark_info' => $request->input('dark_info'),
            'dark_warning' => $request->input('dark_warning'),
            'dark_danger' => $request->input('dark_danger'),
            'dark_light' => $request->input('dark_light'),
            'dark_dark' => $request->input('dark_dark')
        ];
        Storage::put('colors.json', json_encode($colors));
        return redirect()->route('color.settings')->with('success', 'カラー設定が更新されました');
    }

    public function toggleDarkMode(Request $request)
    {
        $darkMode = session('dark_mode', false);
        session(['dark_mode' => !$darkMode]);
        return response()->json(['dark_mode' => !$darkMode]);
    }

    public function reset(Request $request)
    {
        Storage::put('colors.json', json_encode(config('colors.defaults')));
        return response()->json(['success' => true]);
    }
}

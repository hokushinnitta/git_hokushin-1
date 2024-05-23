<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function mainMenu()
    {
        return view('main_menu');
    }

    public function specialMenu()
    {
        return view('special_menu');
    }

    public function gotoMain(Request $request)
    {
        return redirect()->route('main.menu');
    }
}

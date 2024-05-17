<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainMenuController extends Controller
{
    public function showMainMenu()
    {
        return view('main_menu');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialMenuController extends Controller
{
    public function showSpecialMenu()
    {
        return view('special_menu');
    }
}

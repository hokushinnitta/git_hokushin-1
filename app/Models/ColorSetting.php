<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'mode',
        'header_color',
        'background_color',
        'font_color',
        'font_type',
        'font_size',
        'border_color',
        'button_color',
        'button_text_color',
        'input_color',
        'dark_header_color',
        'dark_background_color',
        'dark_font_color',
        'dark_border_color',
        'dark_button_color',
        'dark_button_text_color',
        'dark_input_color',
    ];
}

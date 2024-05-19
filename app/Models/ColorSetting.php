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
    ];
}

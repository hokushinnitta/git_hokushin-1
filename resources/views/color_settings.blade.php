@extends('layouts.app')

@section('content')
<div class="container">
    <h1>カラー設定</h1>
    <form>
        @csrf
        <div class="form-group">
            <label for="headerColor">ヘッダーの色</label>
            <input type="color" id="headerColor" name="header_color" value="{{ $settings->header_color ?? '#ffffff' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="backgroundColor">背景の色</label>
            <input type="color" id="backgroundColor" name="background_color" value="{{ $settings->background_color ?? '#ffffff' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="fontColor">フォントの色</label>
            <input type="color" id="fontColor" name="font_color" value="{{ $settings->font_color ?? '#000000' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="borderColor">ボーダーの色</label>
            <input type="color" id="borderColor" name="border_color" value="{{ $settings->border_color ?? '#000000' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="buttonColor">ボタンの色</label>
            <input type="color" id="buttonColor" name="button_color" value="{{ $settings->button_color ?? '#000000' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="buttonTextColor">ボタンテキストの色</label>
            <input type="color" id="buttonTextColor" name="button_text_color" value="{{ $settings->button_text_color ?? '#ffffff' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputColor">入力欄の色</label>
            <input type="color" id="inputColor" name="input_color" value="{{ $settings->input_color ?? '#ffffff' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="darkHeaderColor">ダークモードヘッダーの色</label>
            <input type="color" id="darkHeaderColor" name="dark_header_color" value="{{ $settings->dark_header_color ?? '#000000' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="darkBackgroundColor">ダークモード背景の色</label>
            <input type="color" id="darkBackgroundColor" name="dark_background_color" value="{{ $settings->dark_background_color ?? '#000000' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="darkFontColor">ダークモードフォントの色</label>
            <input type="color" id="darkFontColor" name="dark_font_color" value="{{ $settings->dark_font_color ?? '#ffffff' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="darkBorderColor">ダークモードボーダーの色</label>
            <input type="color" id="darkBorderColor" name="dark_border_color" value="{{ $settings->dark_border_color ?? '#ffffff' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="darkButtonColor">ダークモードボタンの色</label>
            <input type="color" id="darkButtonColor" name="dark_button_color" value="{{ $settings->dark_button_color ?? '#ffffff' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="darkButtonTextColor">ダークモードボタンテキストの色</label>
            <input type="color" id="darkButtonTextColor" name="dark_button_text_color" value="{{ $settings->dark_button_text_color ?? '#000000' }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="darkInputColor">ダークモード入力欄の色</label>
            <input type="color" id="darkInputColor" name="dark_input_color" value="{{ $settings->dark_input_color ?? '#000000' }}" class="form-control">
        </div>
        <button type="button" id="saveButton" class="btn btn-primary">保存</button>
        <button type="reset" class="btn btn-secondary">リセット</button>
    </form>
</div>
@endsection

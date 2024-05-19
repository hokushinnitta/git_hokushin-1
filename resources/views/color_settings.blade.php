<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カラー設定</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @component('components.header')
    @endcomponent
    <main>
        <div class="container">
            <h1>カラー設定</h1>
            @if(session('success'))
                <div>{{ session('success') }}</div>
            @endif
            <form action="{{ route('color.settings.save') }}" method="POST">
                @csrf
                <div>
                    <label for="header_color">ヘッダーの色:</label>
                    <input type="color" id="header_color" name="header_color" value="{{ $settings->header_color ?? '#ffffff' }}">
                </div>
                <div>
                    <label for="background_color">背景の色:</label>
                    <input type="color" id="background_color" name="background_color" value="{{ $settings->background_color ?? '#ffffff' }}">
                </div>
                <div>
                    <label for="font_color">フォントの色:</label>
                    <input type="color" id="font_color" name="font_color" value="{{ $settings->font_color ?? '#000000' }}">
                </div>
                <div>
                    <label for="font_type">フォントの種類:</label>
                    <input type="text" id="font_type" name="font_type" value="{{ $settings->font_type ?? 'Arial, sans-serif' }}">
                </div>
                <div>
                    <label for="font_size">フォントサイズ:</label>
                    <input type="number" id="font_size" name="font_size" value="{{ $settings->font_size ?? 16 }}">
                </div>
                <div>
                    <label for="border_color">罫線の色:</label>
                    <input type="color" id="border_color" name="border_color" value="{{ $settings->border_color ?? '#cccccc' }}">
                </div>
                <div>
                    <label for="button_color">ボタンの色:</label>
                    <input type="color" id="button_color" name="button_color" value="{{ $settings->button_color ?? '#007bff' }}">
                </div>
                <div>
                    <label for="button_text_color">ボタンの文字色:</label>
                    <input type="color" id="button_text_color" name="button_text_color" value="{{ $settings->button_text_color ?? '#ffffff' }}">
                </div>
                <div>
                    <label for="input_color">入力ボックスの色:</label>
                    <input type="color" id="input_color" name="input_color" value="{{ $settings->input_color ?? '#ffffff' }}">
                </div>
                <div>
                    <button type="submit">保存</button>
                </div>
            </form>
            <form action="{{ route('color.settings.reset') }}" method="GET" style="margin-top: 10px;">
                <button type="submit">リセット</button>
            </form>
        </div>
    </main>
    @component('components.footer', ['copyrightText' => 'Copyright © 2024 RunFree. All rights reserved.'])
    @endcomponent
</body>
</html>

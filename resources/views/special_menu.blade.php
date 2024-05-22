<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Menu</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        @include('components.header')

        <h1>バックメニュー</h1>

        <!-- カラー設定ボタンを追加 -->
        <div class="color-settings-button">
            <a href="{{ route('color.settings.form') }}" class="btn btn-primary">カラー設定</a>
        </div>

        <!-- コンテンツをここに追加 -->
    </div>

    @include('components.footer')
</body>
</html>

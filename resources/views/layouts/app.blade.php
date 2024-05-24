<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('components.header') <!-- ヘッダーの読み込み -->

    <div class="container">
        @yield('content')
    </div>

    @include('components.footer') <!-- フッターの読み込み -->

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

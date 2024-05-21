<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('components.header')
    <div class="container">
        @yield('content')
    </div>
    @include('components.footer')
</body>
</html>

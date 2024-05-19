<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メインMENU</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @component('components.header')
    @endcomponent
    <main>
        <div class="container">
            <h1>メインMENU</h1>
        </div>
    </main>
    @component('components.footer', ['copyrightText' => 'Copyright © 2024 RunFree. All rights reserved.'])
    @endcomponent
</body>
</html>

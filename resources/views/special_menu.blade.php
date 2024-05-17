<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BACK MENU</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <main>
        <div class="container">
            <h1>BACK MENU</h1>
            <form action="{{ route('goto.main') }}" method="POST">
                @csrf
                <button type="submit">GoToMain</button>
            </form>
            <form action="{{ route('logout') }}" method="POST" style="margin-top: 10px;">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        </div>
    </main>
    @component('components.footer', ['copyrightText' => 'Copyright © 2024 RunFree. All rights reserved.'])
    @endcomponent
</body>
</html>

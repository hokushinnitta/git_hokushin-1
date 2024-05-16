<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫管理システム - ログイン</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>在庫管理システム</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="名前を入力" required>
            <input type="password" name="password" placeholder="パスワードを入力" required>
            <button type="submit">ログイン</button>
        </form>
    </div>
</body>
</html>

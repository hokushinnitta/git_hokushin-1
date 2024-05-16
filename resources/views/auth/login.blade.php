<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫管理システム - ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="login-container">
        <h1>在庫管理システム</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="名前を入力" required>
            <input type="password" name="password" placeholder="パスワードを入力" required>
            <button type="submit">ログイン</button>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

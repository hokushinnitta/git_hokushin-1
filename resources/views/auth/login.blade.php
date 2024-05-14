<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫管理 - ログイン</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .login-container {
            text-align: center;
        }
        input[type="text"],
        input[type="password"] {
            display: block;
            margin: 10px auto;
            padding: 10px;
            width: 80%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            color: #fff;
            background-color: #0000cd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #191970;
        }
    </style>
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
</body>
</html>

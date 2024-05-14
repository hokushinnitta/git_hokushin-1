<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BACK MENU</title>
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
        .menu-container {
            text-align: center;
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
    <div class="menu-container">
        <h1>BACK MENU</h1>
        <form action="{{ route('goto.main') }}" method="POST">
            @csrf
            <button type="submit">GoToMain</button>
        </form>
    </div>
</body>
</html>

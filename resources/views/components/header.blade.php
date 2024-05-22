<header class="header">
    <div class="container">
        <div class="logo">
            <h1>在庫管理システム</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                @if(auth()->user() && auth()->user()->name == 'runfree_admin')
                    <li class="nav-item"><a class="nav-link" href="{{ route('special.menu') }}">裏メニュー</a></li>
                @endif
            </ul>
            <div class="user-info navbar-text">
                @auth
                    ログイン: {{ auth()->user()->name }}
                @endauth
            </div>
            <div class="toggle-switch">
                <label>
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider"></span>
                </label>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="form-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger">ログアウト</button>
            </form>
        </nav>
    </div>
</header>

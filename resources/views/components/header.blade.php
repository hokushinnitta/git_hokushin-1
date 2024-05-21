<header class="header">
    <div class="container">
        <div class="logo">
            <h1>在庫管理システム</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">在庫管理システム</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.menu') }}">メインメニュー</a>
                        </li>
                        @if(Auth::check() && Auth::user()->name === 'runfree_admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('color.settings.form') }}">カラー設定</a>
                            </li>
                        @endif
                    </ul>
                    <div class="d-flex">
                        <div class="user-info me-3">
                            @if(Auth::check())
                                <span>{{ Auth::user()->name }}</span>
                                @if(Route::currentRouteName() === 'special.menu')
                                    <form action="{{ route('goto.main') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-success me-2">Go to Main</button>
                                    </form>
                                @endif
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">ログアウト</button>
                                </form>
                            @endif
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="darkModeToggle">
                            <label class="form-check-label" for="darkModeToggle">ダークモード</label>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

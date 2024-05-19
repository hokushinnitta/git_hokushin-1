<header class="header">
    <div class="container">
        <div class="logo">
            <h1>在庫管理システム</h1>
        </div>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="{{ route('main.menu') }}">メインメニュー</a></li>
                @if(Auth::check() && Auth::user()->name === 'runfree_admin')
                    <li class="nav-item"><a href="{{ route('color.settings.form') }}">カラー設定</a></li>
                @endif
            </ul>
            <div class="user-info">
                @if(Auth::check())
                    <?php Log::info('User Info', ['user' => Auth::user()]); ?>
                    <span>{{ Auth::user()->name }}</span>
                    @if(Route::currentRouteName() === 'special.menu')
                        <?php Log::info('Current Route', ['route' => Route::currentRouteName()]); ?>
                        <form action="{{ route('goto.main') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-btn">Go to Main</button>
                        </form>
                    @endif
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-btn">ログアウト</button>
                    </form>
                @else
                    <?php Log::info('User not authenticated'); ?>
                @endif
            </div>
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="toggle-switch">
                <label>
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider"></span>
                </label>
            </div>
        </nav>
    </div>
</header>

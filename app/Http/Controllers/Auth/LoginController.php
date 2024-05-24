<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/main-menu';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'runfree_admin') {
            return redirect('/special-menu');
        } elseif ($user->role === 'admin') {
            return redirect('/main-menu');
        }

        return redirect('/');
    }

    // ユーザー認証を名前で行うための設定
    public function username()
    {
        return 'name';
    }
}

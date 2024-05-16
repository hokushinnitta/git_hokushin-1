<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        \Log::info('Login form data', ['name' => $request->name, 'password' => $request->password]);

        $request->validate([
            'name' => 'required|string|max:50',
            'password' => 'required|string|max:50',
        ]);

        \Log::info('Login attempt', ['name' => $request->name]);

        try {
            $user = User::where('name', $request->name)->first();
            \Log::info('User query executed', ['user' => $user]);

            if ($user) {
                \Log::info('User found', ['user' => $user]);
                if (Hash::check($request->password, $user->password)) {
                    \Log::info('Password check passed');
                    if ($user->name === 'runfree_admin') {
                        \Log::info('Redirecting to special menu');
                        return redirect()->route('special.menu');
                    }
                    \Log::info('Redirecting to main menu');
                    return redirect()->route('main.menu');
                } else {
                    \Log::info('Password check failed');
                }
            } else {
                \Log::info('User not found');
            }
        } catch (\Exception $e) {
            \Log::error('User query failed', ['exception' => $e->getMessage()]);
        }

        return back()->withErrors(['message' => 'Invalid credentials.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}

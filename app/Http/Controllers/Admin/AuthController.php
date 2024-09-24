<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = $request->remember ? true : false;

        if (!Auth::attempt($request->only('email', 'password'), $remember)) {
            return $this->back('error', 'Email atau Password salah!');
        }

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Auth::logout();

        return $this->redirect('/', 'success', 'Logout Berhasil');
    }
}

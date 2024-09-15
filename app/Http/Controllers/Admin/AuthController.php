<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

        if (!auth('admin')->attempt($request->only('email', 'password'))) {
            return $this->back('error', 'Email atau Password salah!');
        }

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        auth('admin')->logout();

        return $this->redirect('/', 'success', 'Logout Berhasil');
    }
}

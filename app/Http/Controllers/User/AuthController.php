<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth('api')->attempt($request->only('email', 'password'))) {
            return $this->error('Email atau Password salah!');
        }

        $user = User::find(auth('api')->user()->id);

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('auth-token')->plainTextToken
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return $this->success(null, 'Logout Berhasil');
    }
}

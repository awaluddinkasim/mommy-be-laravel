<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return $this->success(null, 'Registrasi Berhasil');
    }
}

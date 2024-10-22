<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
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

    public function update(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:8',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user = User::find($request->user()->id);
        $user->update($data);

        return $this->success([
            'user' => new UserResource($user),
        ], 'Update Profil Berhasil');
    }
}

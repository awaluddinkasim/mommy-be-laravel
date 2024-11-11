<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('pages.pengguna', [
            'users' => User::all(),
        ]);
    }

    public function edit(User $user): View
    {
        return view('pages.pengguna-edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:8',
            'no_hp' => 'required',
        ]);

        if ($data['password'] !== null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return $this->redirect(route('pengguna'), 'success', 'Update akun berhasil');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->back('success', 'Data pengguna berhasil dihapus');
    }
}

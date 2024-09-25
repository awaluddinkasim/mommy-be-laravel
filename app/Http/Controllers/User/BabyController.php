<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Baby;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $user = $request->user();

        return $this->success([
            'babies' => Baby::where('user_id', $user->id)->get()
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $data['user_id'] = $request->user()->id;

        Baby::create($data);

        return $this->success();
    }

    public function destroy(Baby $baby): JsonResponse
    {
        $baby->delete();

        return $this->success();
    }
}

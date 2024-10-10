<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\BabyResource;
use App\Models\Baby;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $user = $request->user();

        $babies = Baby::where('user_id', $user->id)->get();

        return $this->success([
            'babies' => BabyResource::collection($babies),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $user = $request->user();

        $data['user_id'] = $user->id;

        Baby::create($data);

        $babies = Baby::where('user_id', $user->id)->get();

        return $this->success([
            'babies' => BabyResource::collection($babies),
        ]);
    }

    public function destroy(Request $request, Baby $baby): JsonResponse
    {
        $baby->delete();

        $user = $request->user();

        $babies = Baby::where('user_id', $user->id)->get();

        return $this->success([
            'babies' => BabyResource::collection($babies),
        ]);
    }
}

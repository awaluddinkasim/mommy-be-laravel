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

        $babies = BabyResource::collection(Baby::where('user_id', $user->id)->get());

        return $this->success([
            'babies' => $babies
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

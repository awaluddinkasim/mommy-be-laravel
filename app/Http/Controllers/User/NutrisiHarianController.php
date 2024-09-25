<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NutrisiHarian;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NutrisiHarianController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $user = $request->user();

        $nutrisiHarian = NutrisiHarian::where('user_id', $user->id)->get();

        return $this->success([
            'nutrisiHarian' => $nutrisiHarian
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'makanan_id' => 'required',
            'sesi' => 'required',
        ]);

        $data['user_id'] = $request->user()->id;

        NutrisiHarian::create($data);

        return $this->success();
    }
}

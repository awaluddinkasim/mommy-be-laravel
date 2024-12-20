<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\NutrisiHarianResource;
use App\Models\NutrisiHarian;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NutrisiHarianController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        if (!$request->get('tanggal')) return $this->error('Parameter tanggal tidak boleh kosong');

        $user = $request->user();

        $tanggal = $request->get('tanggal');

        $nutrisiHarian = NutrisiHarian::where('user_id', $user->id)
            ->whereDate('tanggal', $tanggal)->get();

        $kebutuhanKalori = $user->obstetri->last()?->statusGizi?->kebutuhan_kalori ?? 0;

        return $this->success([
            'nutrisiHarian' => NutrisiHarianResource::collection($nutrisiHarian),
            'kebutuhanKalori' => $kebutuhanKalori == 0 ? null : round($kebutuhanKalori, 2)
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'makanan_id' => 'required',
            'sesi' => 'required',
        ]);

        $user = $request->user();

        $data['user_id'] = $user->id;
        $data['tanggal'] = now();

        NutrisiHarian::create($data);

        $nutrisiHarian = NutrisiHarian::where('user_id', $data['user_id'])
            ->whereDate('tanggal', now())->get();

        $kebutuhanKalori = $user->obstetri->last()?->statusGizi?->kebutuhan_kalori ?? 0;

        return $this->success([
            'nutrisiHarian' => NutrisiHarianResource::collection($nutrisiHarian),
            'kebutuhanKalori' => $kebutuhanKalori == 0 ? null : round($kebutuhanKalori, 2)
        ]);
    }
}

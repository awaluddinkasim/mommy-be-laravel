<?php

namespace App\Http\Controllers\User;

use App\Models\Laktasi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\LaktasiResource;
use App\Models\Baby;

class LaktasiController extends Controller
{
    public function get(Baby $baby): JsonResponse
    {
        $daftarLaktasi = LaktasiResource::collection(Laktasi::where('baby_id', $baby->id)->get());

        return $this->success([
            'daftarLaktasi' => $daftarLaktasi
        ]);
    }

    public function mulai(Request $request, Baby $baby): JsonResponse
    {
        $data = $request->validate([
            'mulai' => 'required',
            'posisi' => 'required',
        ]);

        $data['baby_id'] = $baby->id;

        Laktasi::create($data);

        return $this->success();
    }

    public function selesai(Request $request, Laktasi $laktasi): JsonResponse
    {
        $data = $request->validate([
            'selesai' => 'required',
        ]);

        $laktasi->update($data);

        return $this->success();
    }
}

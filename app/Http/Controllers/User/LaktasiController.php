<?php

namespace App\Http\Controllers\User;

use App\Models\Laktasi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class LaktasiController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $user = $request->user();

        $daftarLaktasi = Laktasi::where('user_id', $user->id)->get();

        return $this->success([
            'daftarLaktasi' => $daftarLaktasi
        ]);
    }

    public function mulai(Request $request): JsonResponse
    {
        $data = $request->validate([
            'mulai' => 'required',
            'posisi' => 'required',
        ]);

        $data['user_id'] = $request->user()->id;

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

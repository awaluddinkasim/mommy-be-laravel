<?php

namespace App\Http\Controllers\User;

use App\Models\Laktasi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\LaktasiResource;
use App\Models\Baby;
use Carbon\Carbon;

class LaktasiController extends Controller
{
    public function get(Baby $baby, Request $request): JsonResponse
    {
        $tanggal = $request->get('tanggal', date('Y-m-d'));

        $riwayatLaktasi = Laktasi::where('baby_id', $baby->id)
            ->whereDate('created_at', $tanggal)->get();

        return $this->success([
            'riwayatLaktasi' => LaktasiResource::collection($riwayatLaktasi),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'baby_id' => 'required',
            'mulai' => 'required',
            'durasi' => 'required',
            'posisi' => 'required',
        ]);

        $data['selesai'] = Carbon::parse($data['mulai'])->addMillisecond($data['durasi']);

        Laktasi::create($data);

        return $this->success();
    }
}

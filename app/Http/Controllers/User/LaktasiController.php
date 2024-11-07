<?php

namespace App\Http\Controllers\User;

use App\Models\Laktasi;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\LaktasiGrafikResource;
use App\Http\Resources\LaktasiResource;
use App\Models\Baby;
use Carbon\Carbon;
use Exception;

class LaktasiController extends Controller
{
    public function get(Baby $baby, Request $request): JsonResponse
    {
        if (!$request->get('tanggal')) return $this->error('Parameter tanggal tidak boleh kosong');

        $tanggal = $request->get('tanggal');

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


    public function charts(Baby $baby, Request $request): JsonResponse
    {
        if (!$request->get('tanggal')) return $this->error('Parameter tanggal tidak boleh kosong');

        $tanggal = $request->get('tanggal');

        $riwayatLaktasi = Laktasi::where('baby_id', $baby->id)
            ->whereDate('created_at', $tanggal)->get()->groupBy('posisi');

        $kiri = [];
        $kanan = [];

        foreach ($riwayatLaktasi as $key => $value) {
            if ($key == 'Kiri') {
                $kiri = $value;
            }

            if ($key == 'Kanan') {
                $kanan = $value;
            }
        }

        // Data mingguan yang dikelompokkan per hari
        $startOfWeek = Carbon::parse($tanggal)->startOfWeek();
        $endOfWeek = Carbon::parse($tanggal)->endOfWeek();

        $riwayatLaktasiMingguan = Laktasi::where('baby_id', $baby->id)
            ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->get();

        // Mengelompokkan data berdasarkan tanggal dan posisi
        $dataMingguan = $riwayatLaktasiMingguan->groupBy(function ($item) {
            return ['tanggal' => $item->created_at->format('Y-m-d')];
        });

        // Menyiapkan data untuk chart
        $kiriMingguan = [];
        $kananMingguan = [];

        // Iterasi dari startOfWeek sampai endOfWeek
        for ($date = clone $startOfWeek; $date <= $endOfWeek; $date->addDay()) {
            $currentDate = $date->format('Y-m-d');

            if (isset($dataMingguan[$currentDate])) {
                // Menghitung rata-rata untuk posisi Kiri
                $dataKiri = $dataMingguan[$currentDate]->where('posisi', 'Kiri')->avg('durasi');


                // Menghitung rata-rata untuk posisi Kanan
                $dataKanan = $dataMingguan[$currentDate]->where('posisi', 'Kanan')->avg('durasi');
            } else {
                $dataKiri = 0;
                $dataKanan = 0;
            }

            $kiriMingguan[] = [
                'tanggal' => $currentDate,
                'durasi' => round($dataKiri, 2) ?? 0,
            ];

            $kananMingguan[] = [
                'tanggal' => $currentDate,
                'durasi' => round($dataKanan, 2) ?? 0,
            ];
        }

        return $this->success([
            'kiri' => LaktasiGrafikResource::collection($kiri),
            'kanan' => LaktasiGrafikResource::collection($kanan),
            'kiriMingguan' => $kiriMingguan,
            'kananMingguan' => $kananMingguan,
        ]);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Models\Baby;
use App\Models\Ekskresi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BabyEkskresiResource;

class BabyEkskresiController extends Controller
{
    public function get(Request $request, Baby $baby)
    {
        if (!$request->get('tanggal')) return $this->error('Parameter tanggal tidak boleh kosong');

        $daftarEkskresi = Ekskresi::where('baby_id', $baby->id)
            ->whereDate('tanggal', $request->get('tanggal'))->get();

        return $this->success([
            'ekskresi' => BabyEkskresiResource::collection($daftarEkskresi),
        ]);
    }

    public function store(Request $request, Baby $baby)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'ekskresi' => 'required',
            'pukul' => 'required',
        ]);

        if ($data['ekskresi'] == 'Keduanya') {
            Ekskresi::insert([
                [
                    'baby_id' => $baby->id,
                    'ekskresi' => 'BAK',
                    'pukul' => $data['pukul']
                ],
                [
                    'baby_id' => $baby->id,
                    'ekskresi' => 'BAB',
                    'pukul' => $data['pukul']
                ]
            ]);
        } else {
            $data['baby_id'] = $baby->id;
            Ekskresi::create($data);
        }

        $daftarEkskresi = Ekskresi::where('baby_id', $baby->id)
            ->whereDate('tanggal', today())->get();

        return $this->success([
            'ekskresi' => BabyEkskresiResource::collection($daftarEkskresi),
        ]);
    }

    public function destroy(Request $request, Baby $baby, Ekskresi $ekskresi)
    {
        $ekskresi->delete();

        $daftarEkskresi = Ekskresi::where('baby_id', $baby->id)
            ->whereDate('tanggal', today())->get();

        return $this->success([
            'ekskresi' => BabyEkskresiResource::collection($daftarEkskresi),
        ]);
    }
}

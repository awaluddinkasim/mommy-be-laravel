<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ObstetriResource;
use App\Http\Utils\ObstetricRiskCalculator;
use App\Models\Obstetri;
use Illuminate\Http\Request;

class ObstetriController extends Controller
{
    public function get()
    {
        return $this->success([
            'obstetri' => Obstetri::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kehamilan' => 'required',
            'persalinan' => 'required',
            'riwayat_abortus' => 'required',
            'metode_persalinan' => 'required',
            'jarak_kelahiran' => 'required',
        ]);

        $calculator =  new ObstetricRiskCalculator();
        $data['resiko'] = $calculator->calculateRisk(
            $data['kehamilan'],
            $data['persalinan'],
            $data['riwayat_abortus'],
            $data['metode_persalinan'],
            $data['jarak_kelahiran']
        );

        Obstetri::create($data);

        $daftarObstetri = Obstetri::where('user_id', $request->user()->id)->get();

        return $this->success([
            'daftarObstetri' => ObstetriResource::collection($daftarObstetri),
        ]);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\StatusGiziResource;
use App\Http\Utils\PregnancyCalculator;
use App\Models\Obstetri;
use App\Models\StatusGizi;
use Illuminate\Http\Request;

class StatusGiziController extends Controller
{
    private $pregnancyCalculator;

    public function __construct(PregnancyCalculator $pregnancyCalculator)
    {
        $this->pregnancyCalculator = $pregnancyCalculator;
    }

    public function get(Obstetri $obstetri)
    {
        $statusGizi = $obstetri->statusGizi;

        return $this->success([
            'statusGizi' => $statusGizi ? new StatusGiziResource($statusGizi) : null,
        ]);
    }

    public function store(Request $request, Obstetri $obstetri)
    {
        $data = $request->validate([
            'tinggi_badan' => 'required',
            'bb_sebelum_hamil' => 'required',
            'bb_saat_hamil' => 'required',
            'bb_setelah_melahirkan' => 'required',
            'aktifitas_harian' => 'required',
        ]);

        $data['obstetri_id'] = $obstetri->id;

        $data['imt_pra_hamil'] = $this->pregnancyCalculator->hitungIMTPraHamil($data['bb_sebelum_hamil'], $data['tinggi_badan']);
        $data['imt_post_hamil'] = $this->pregnancyCalculator->hitungIMTPostHamil($data['bb_setelah_melahirkan'], $data['tinggi_badan']);
        $data['resistensi_bb'] = $this->pregnancyCalculator->hitungResistensiBeratBadan($data['bb_saat_hamil'], $data['bb_sebelum_hamil']);
        $data['kebutuhan_kalori'] = $this->pregnancyCalculator->hitungKebutuhanKalori($data['bb_sebelum_hamil'], $data['tinggi_badan'], $request->user()->usia, $data['aktifitas_harian']);

        StatusGizi::create($data);

        return $this->success([
            'statusGizi' => new StatusGiziResource($obstetri->statusGizi),
        ]);
    }
}

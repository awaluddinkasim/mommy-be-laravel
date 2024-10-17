<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StatusGiziResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tinggi_badan' => $this->tinggi_badan,
            'bb_sebelum_hamil' => $this->bb_sebelum_hamil,
            'bb_saat_hamil' => $this->bb_saat_hamil,
            'bb_setelah_melahirkan' => $this->bb_setelah_melahirkan,
            'aktifitas_harian' => ucfirst($this->aktifitas_harian),
            'imt_pra_hamil' => $this->imt_pra_hamil,
            'imt_post_hamil' => $this->imt_post_hamil,
            'resistensi_bb' => $this->resistensi_bb,
            'kebutuhan_kalori' => $this->kebutuhan_kalori
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObstetriResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'kehamilan' => $this->kehamilan,
            'persalinan' => $this->persalinan,
            'riwayat_abortus' => $this->riwayat_abortus,
            'metode_persalinan' => ucfirst($this->metode_persalinan),
            'jarak_kelahiran' => $this->jarak_kelahiran,
            'resiko' => $this->resiko,
            'pesan' => $this->pesan
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BabyMonitorTidurResource extends JsonResource
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
            'tanggal' => $this->tanggal,
            'tidur' => $this->tidur,
            'bangun' => $this->bangun,
            'durasi_tidur' => getDurationString($this->tidur, $this->bangun),
        ];
    }
}

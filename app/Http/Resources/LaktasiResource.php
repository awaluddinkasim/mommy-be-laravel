<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LaktasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
            'pukul' => $this->mulai,
            'durasi' => getDurationString($this->mulai, $this->selesai),
            'posisi' => $this->posisi,
        ];
    }
}

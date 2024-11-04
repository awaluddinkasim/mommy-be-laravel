<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LaktasiGrafikResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'durasi' => round(Carbon::parse($this->mulai)->diffInMinutes($this->selesai), 2),
            'tanggal' => $this->created_at,
        ];
    }
}

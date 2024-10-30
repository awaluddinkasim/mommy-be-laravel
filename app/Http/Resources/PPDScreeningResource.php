<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PPDScreeningResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'total_score' => $this->total_score,
            'tingkat_risiko' => $this->tingkat_risiko,
            'pesan' => $this->pesan
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NutrisiHarianResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'makanan' => new MakananResource($this->makanan),
            'sesi' => $this->sesi,
            'tanggal' => $this->tanggal
        ];
    }
}

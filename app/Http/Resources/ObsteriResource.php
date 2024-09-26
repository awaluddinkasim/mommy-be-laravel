<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObsteriResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'kehamilan' => $this->kehamilan,
            'persalinan' => $this->persalinan,
            'abortus' => $this->abortus,
            'metode_persalinan' => $this->metode_persalinan,
            'jarak_kehamilan' => $this->jarak_kehamilan
        ];
    }
}

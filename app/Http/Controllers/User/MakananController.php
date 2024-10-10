<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\MakananResource;
use App\Models\Makanan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function get(): JsonResponse
    {
        $makanan = MakananResource::collection(Makanan::all());

        return $this->success([
            'makanan' => MakananResource::collection(Makanan::all()),
        ]);
    }
}

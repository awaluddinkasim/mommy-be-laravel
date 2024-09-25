<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Makanan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function get(): JsonResponse
    {
        return $this->success([
            'makanan' => Makanan::all(),
        ]);
    }
}

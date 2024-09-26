<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ObsteriResource;
use App\Models\Obsteri;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ObsteriController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $user = $request->user();

        $daftarObsteri = ObsteriResource::collection(Obsteri::where('user_id', $user->id));

        return $this->success([
            'daftarObsteri' => $daftarObsteri
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'kehamilan' => 'required',
            'persalinan' => 'required',
            'abortus' => 'required',
            'metode_persalinan' => 'required',
            'jarak_kehamilan' => 'required',
        ]);

        $data['user_id'] = $request->user()->id;

        Obsteri::create($data);

        return $this->success();
    }

    public function destroy(Obsteri $obsteri): JsonResponse
    {
        $obsteri->delete();

        return $this->success();
    }
}

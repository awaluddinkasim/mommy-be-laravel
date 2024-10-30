<?php

namespace App\Http\Controllers\User;

use App\Models\Baby;
use App\Models\Pertumbuhan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BabyPertumbuhanResource;

class BabyPertumbuhanController extends Controller
{
    public function get(Request $request, Baby $baby)
    {
        if (!$request->get('tanggal')) return $this->error('Parameter tanggal tidak boleh kosong');

        $daftarPertumbuhan = Pertumbuhan::where('baby_id', $baby->id)
            ->whereDate('created_at', $request->get('tanggal'))->get();

        return $this->success([
            'pertumbuhan' => BabyPertumbuhanResource::collection($daftarPertumbuhan,)
        ]);
    }

    public function store(Request $request, Baby $baby)
    {
        $request->validate([
            'tanggal' => 'required',
            'berat_badan' => 'required',
            'panjang_badan' => 'required',
        ]);

        $data['baby_id'] = $baby->id;

        Pertumbuhan::create($data);

        $daftarPertumbuhan = Pertumbuhan::where('baby_id', $baby->id)
            ->whereDate('created_at', $request->get('tanggal'))->get();

        return $this->success([
            'pertumbuhan' => BabyPertumbuhanResource::collection($daftarPertumbuhan,)
        ]);
    }

    public function destroy(Request $request, Baby $baby, Pertumbuhan $pertumbuhan)
    {
        $pertumbuhan->delete();

        $daftarPertumbuhan = Pertumbuhan::where('baby_id', $baby->id)
            ->whereDate('created_at', $request->get('tanggal'))->get();

        return $this->success([
            'pertumbuhan' => BabyPertumbuhanResource::collection($daftarPertumbuhan,)
        ]);
    }
}

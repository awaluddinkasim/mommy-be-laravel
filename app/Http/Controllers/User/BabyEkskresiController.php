<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Baby;
use App\Models\Ekskresi;
use Illuminate\Http\Request;

class BabyEkskresiController extends Controller
{
    public function get(Request $request, Baby $baby)
    {
        if (!$request->get('tanggal')) return $this->error('Parameter tanggal tidak boleh kosong');

        $daftarEkskresi = Ekskresi::where('baby_id', $baby->id)
            ->whereDate('tanggal', $request->get('tanggal'))->get();

        return $this->success([
            'ekskresi' => $daftarEkskresi,
        ]);
    }

    public function store(Request $request, Baby $baby)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'ekskresi' => 'required',
        ]);

        $data['baby_id'] = $baby->id;
        Ekskresi::create($data);

        $daftarEkskresi = Ekskresi::where('baby_id', $baby->id)
            ->whereDate('tanggal', $request->get('tanggal'))->get();

        return $this->success([
            'ekskresi' => $daftarEkskresi,
        ]);
    }

    public function destroy(Request $request, Baby $baby, Ekskresi $ekskresi)
    {
        $ekskresi->delete();

        $daftarEkskresi = Ekskresi::where('baby_id', $baby->id)
            ->whereDate('tanggal', $request->get('tanggal'))->get();

        return $this->success([
            'ekskresi' => $daftarEkskresi,
        ]);
    }
}

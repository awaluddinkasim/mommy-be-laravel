<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Baby;
use App\Models\MonitorTidur;
use Illuminate\Http\Request;

class BabyMonitorTidurController extends Controller
{
    public function get(Request $request, Baby $baby)
    {
        if (!$request->get('tanggal')) return $this->error('Parameter tanggal tidak boleh kosong');

        $daftarMonitorTidur = MonitorTidur::where('baby_id', $baby->id)
            ->whereDate('tanggal', $request->get('tanggal'))->get();

        return $this->success([
            'monitorTidur' => $daftarMonitorTidur,
        ]);
    }

    public function store(Request $request, Baby $baby)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'tidur' => 'required',
            'bangun' => 'required',
        ]);

        $data['baby_id'] = $baby->id;

        MonitorTidur::create($data);

        $daftarMonitorTidur = MonitorTidur::where('baby_id', $baby->id)
            ->whereDate('tanggal', $request->get('tanggal'))->get();

        return $this->success([
            'monitorTidur' => $daftarMonitorTidur,
        ]);
    }

    public function destroy(Request $request, Baby $baby, MonitorTidur $monitorTidur)
    {
        $monitorTidur->delete();

        $daftarMonitorTidur = MonitorTidur::where('baby_id', $baby->id)
            ->whereDate('tanggal', $request->get('tanggal'))->get();

        return $this->success([
            'monitorTidur' => $daftarMonitorTidur,
        ]);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Models\PPDScreening;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Utils\PPDScreeningCalculator;
use App\Http\Resources\PPDScreeningResource;

class PPDScreeningController extends Controller
{
    public function get(Request $request)
    {
        $user = $request->user();

        $this->success([
            'ppdScreening' => $user->ppdScreening ? new PPDScreeningResource($user->ppdScreening) : null,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'q1' => 'required|integer|min:0|max:3',
            'q2' => 'required|integer|min:0|max:3',
            'q3' => 'required|integer|min:0|max:3',
            'q4' => 'required|integer|min:0|max:3',
            'q5' => 'required|integer|min:0|max:3',
            'q6' => 'required|integer|min:0|max:3',
            'q7' => 'required|integer|min:0|max:3',
            'q8' => 'required|integer|min:0|max:3',
            'q9' => 'required|integer|min:0|max:3',
            'q10' => 'required|integer|min:0|max:3',
        ]);

        $user = $request->user();

        if ($user->ppdScreening) {
            $user->ppdScreening->delete();
        }

        $calculator = new PPDScreeningCalculator();
        $result = $calculator->calculate($data);

        $data['total_score'] = $result['total_score'];
        $data['tingkat_risiko'] = $result['tingkat_risiko'];
        $data['pesan'] = $result['pesan'];

        PPDScreening::create($data);

        $this->success([
            'ppdScreening' => new PPDScreeningResource($user->ppdScreening),
        ]);
    }
}

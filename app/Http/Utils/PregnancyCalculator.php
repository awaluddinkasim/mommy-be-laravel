<?php

namespace App\Http\Utils;

class PregnancyCalculator
{
    public function hitungIMTPraHamil(float $weight, float $height): float
    {
        return $weight / ($height * $height);
    }

    public function hitungIMTPostHamil(float $postWeight, float $height): float
    {
        return $postWeight / ($height * $height);
    }

    public function hitungResistensiBeratBadan(float $pregnancyWeight, float $prePregnancyWeight): float
    {
        return $pregnancyWeight - $prePregnancyWeight;
    }

    public function hitungKebutuhanKalori(
        float $weight,
        float $height,
        int $age,
        string $activityLevel,
    ): float {
        $bmr = $this->hitungBMR($weight, $height, $age);
        $tee = $this->hitungTEE($bmr, $activityLevel);

        return $tee;
    }

    private function hitungBMR(float $weight, float $height, int $age): float
    {
        return 655.1 + (9.563 * $weight) + (1.850 * ($height * 100)) - (4.676 * $age);
    }

    private function hitungTEE(float $bmr, string $activityLevel): float
    {
        $activityFactors = [
            'sedentary' => 1.2,
            'sedikit_aktif' => 1.375,
            'moderat' => 1.55,
            'aktif' => 1.725,
            'sangat_aktif' => 1.9
        ];

        return $bmr * ($activityFactors[$activityLevel] ?? 1.2);
    }
}

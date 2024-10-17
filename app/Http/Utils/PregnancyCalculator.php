<?php

namespace App\Http\Utils;

class PregnancyCalculator
{
    public function hitungIMTPraHamil(float $weight, float $height): float
    {
        // Konversi tinggi dari cm ke meter untuk perhitungan IMT
        $heightInMeters = $height / 100;
        return round($weight / ($heightInMeters * $heightInMeters), 2);
    }

    public function hitungIMTPostHamil(float $postWeight, float $height): float
    {
        // Konversi tinggi dari cm ke meter untuk perhitungan IMT
        $heightInMeters = $height / 100;
        return round($postWeight / ($heightInMeters * $heightInMeters), 2);
    }

    public function hitungResistensiBeratBadan(float $pregnancyWeight, float $prePregnancyWeight): float
    {
        return round($pregnancyWeight - $prePregnancyWeight, 2);
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
        return 655.1 + (9.563 * $weight) + (1.850 * $height) - (4.676 * $age);
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

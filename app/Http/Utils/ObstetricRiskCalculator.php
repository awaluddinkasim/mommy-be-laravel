<?php

namespace App\Http\Utils;

class ObstetricRiskCalculator
{
    public function calculateRisk(
        int $pregnancyNumber,
        int $deliveryNumber,
        int $abortionHistory,
        string $deliveryMethod,
        float $previousBirthInterval
    ): array {
        $score = 2; // Skor awal untuk semua ibu hamil

        // Hitung skor berdasarkan kehamilan ke berapa
        if ($pregnancyNumber === 1 || $pregnancyNumber >= 4) {
            $score += ($pregnancyNumber === 1) ? 2 : 4;
        }

        // Hitung skor berdasarkan persalinan ke berapa
        if ($deliveryNumber === 1 || $deliveryNumber >= 4) {
            $score += ($deliveryNumber === 1) ? 2 : 4;
        }

        // Hitung skor berdasarkan riwayat abortus
        if ($abortionHistory === 1) {
            $score += 4;
        } elseif ($abortionHistory === 2) {
            $score += 8;
        } elseif ($abortionHistory >= 3) {
            $score += 12;
        }

        // Hitung skor berdasarkan metode persalinan
        if (strtolower($deliveryMethod) === 'caesar') {
            $score += 8;
        }

        // Hitung skor berdasarkan jarak kelahiran sebelumnya
        if ($previousBirthInterval < 2 || $previousBirthInterval > 10) {
            $score += 4;
        }

        // Tentukan kategori risiko
        $riskCategory = $this->determineRiskCategory($score);

        return [
            'score' => $score,
            'riskCategory' => $riskCategory
        ];
    }

    private function determineRiskCategory(int $score): string
    {
        if ($score <= 2) {
            return 'Kehamilan Risiko Rendah (KRR)';
        } elseif ($score >= 6 && $score <= 10) {
            return 'Kehamilan Risiko Tinggi (KRT)';
        } else {
            return 'Kehamilan Risiko Sangat Tinggi (KRST)';
        }
    }
}

<?php

namespace App\Http\Utils;

class PPDScreeningCalculator
{
    public function calculate($data)
    {
        $questions = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10'];
        $totalScore = 0;

        foreach ($questions as $question) {
            $totalScore = $totalScore + $data[$question];
        }

        $tingkatRisiko = $this->tingkatRisiko($totalScore);

        return [
            'total_score' => $totalScore,
            'tingkat_risiko' => $tingkatRisiko,
            'pesan' => $this->pesan($tingkatRisiko),
        ];
    }

    private function tingkatRisiko($score)
    {
        if ($score >= 16) {
            return 'Memerlukan Asesmen Klinik Lanjut';
        } elseif ($score >= 13) {
            return 'Risiko Depresi Severe';
        } elseif ($score >= 11) {
            return 'Risiko Depresi Moderat';
        } else {
            return 'Normal';
        }
    }

    private function pesan($risiko)
    {
        $pesan = [
            'Normal' => 'Ibu menunjukkan kondisi emosi yang baik, dan ini merupakan tanda bahwa ibu dapat mengelola perubahan yang terjadi setelah melahirkan. Terus jaga kesehatan mental dan fisik, tetap terbuka berbagi perasaan dengan orang terdekat, dan jangan ragu untuk mencari dukungan jika diperlukan.',
            'Risiko Depresi Moderat' => 'Ibu mungkin merasakan beberapa perubahan emosi yang memengaruhi suasana hati. Hal ini cukup umum pada ibu setelah melahirkan. Luangkan waktu untuk istirahat dan relaksasi, jangan ragu untuk berbicara dengan keluarga atau teman tentang apa yang dirasakan. Jika perasaan ini terus berlanjut atau memburuk, penting untuk segera mendapatkan dukungan profesional.',
            'Risiko Depresi Severe' => 'Skor ibu menunjukkan tanda-tanda yang lebih signifikan dari depresi pasca-persalinan. Ini adalah saat yang penting untuk mendapatkan dukungan lebih lanjut. Diskusikan perasaan ibu dengan tenaga kesehatan atau konselor, yang dapat membantu menemukan cara mengelola perasaan ini dengan lebih baik. Mencari bantuan tidak menunjukkan kelemahan, melainkan langkah berani untuk menjaga kesejahteraan ibu dan bayi.',
            'Memerlukan Asesmen Klinik Lanjut' => 'Skor ibu menunjukkan gejala yang memerlukan perhatian lebih serius. Segera jadwalkan pertemuan dengan tenaga kesehatan profesional seperti dokter atau psikolog untuk mendapatkan penilaian klinis dan bantuan lebih lanjut. Kesehatan mental ibu sangat penting bagi kesehatan ibu dan bayi. Dukungan dari keluarga, teman, dan tenaga profesional dapat membantu ibu melalui perasaanmasa ini.',
        ];

        return $pesan[$risiko];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusGizi extends Model
{
    use HasFactory;

    protected $table = 'status_gizi';

    protected $fillable = [
        'obstetri_id',
        'tinggi_badan',
        'bb_sebelum_hamil',
        'bb_saat_hamil',
        'bb_setelah_melahirkan',
        'aktifitas_harian',
        'imt_pra_hamil',
        'imt_post_hamil',
        'resistensi_bb',
        'kebutuhan_kalori',
    ];

    public function pesan(): Attribute
    {
        $imt = $this->imt_post_hamil;

        if ($imt > 25) {
            $pesan = "Anda berada dalam kategori berat badan berlebih atau obesitas. Mengelola berat badan dengan memperbaiki pola makan dan meningkatkan aktivitas fisik akan membantu menurunkan risiko komplikasi kesehatan. Pilih makanan rendah kalori namun padat nutrisi seperti sayuran, buah-buahan, protein rendah lemak, dan biji-bijian utuh. Konsultasikan dengan dokter atau ahli gizi untuk mendapatkan panduan yang tepat dalam mengatur pola makan dan rencana aktivitas fisik.";
        } elseif ($imt >= 18.5) {
            $pesan = "Anda berada dalam kategori berat badan normal. Jaga pola makan yang seimbang dan kaya nutrisi untuk mendukung pemulihan pascapersalinan dan mempertahankan kesehatan tubuh Anda. Teruskan mengonsumsi makanan yang tinggi serat, protein, dan cairan untuk memastikan kebutuhan gizi selama menyusui terpenuhi.";
        } elseif ($imt >= 17) {
            $pesan = "Anda memiliki risiko kekurangan kalori dan protein ringan. Tingkatkan asupan makanan bergizi seimbang yang mengandung protein, lemak sehat, dan karbohidrat kompleks. Tambahkan juga sayuran hijau, buah-buahan, dan sumber protein hewani atau nabati untuk membantu pemulihan dan produksi ASI.";
        } else {
            $pesan = "Anda berada dalam kategori berat badan yang kurang dengan risiko kekurangan kalori dan protein yang tinggi. Penting untuk segera meningkatkan asupan nutrisi, terutama makanan tinggi protein, kalori, dan mikronutrien seperti zat besi, kalsium, dan vitamin D. Diskusikan dengan ahli gizi atau tenaga kesehatan untuk mendapatkan rencana makan yang tepat guna memperbaiki status gizi Anda.";
        }

        return Attribute::make(
            get: fn() => $pesan
        );
    }
}

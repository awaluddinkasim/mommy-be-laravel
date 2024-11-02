<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Obstetri extends Model
{
    use HasFactory;

    protected $table = 'obstetri';

    protected $fillable = [
        'user_id',
        'kehamilan',
        'persalinan',
        'riwayat_abortus',
        'metode_persalinan',
        'jarak_kelahiran',
        'resiko',
        'score_resiko'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function statusGizi(): HasOne
    {
        return $this->hasOne(StatusGizi::class, 'obstetri_id');
    }

    public function pesan(): Attribute
    {
        $usia = floor(Carbon::parse($this->user->tgl_lahir)->diffInYears(Carbon::parse($this->created_at)));

        if ($usia > 35) {
            $pesan = "Usia $usia Tahun, kehamilan di usia di atas 35 tahun membawa risiko obstetri yang lebih tinggi, seperti hipertensi, diabetes gestasional, dan komplikasi persalinan. Sangat penting untuk melakukan pemantauan kesehatan secara rutin dan menjaga gaya hidup sehat, termasuk pola makan seimbang dan olahraga ringan. Diskusikan dengan dokter Anda tentang perencanaan persalinan, serta pemeriksaan rutin untuk memastikan pemulihan pascapersalinan yang optimal.";
        } elseif ($usia >= 20) {
            $pesan = "Usia $usia Tahun, Anda berada dalam rentang usia yang optimal untuk kehamilan, dengan risiko obstetri yang lebih rendah. Tetap penting untuk menjaga kesehatan dengan pola makan yang seimbang, olahraga ringan, dan cukup istirahat. Lakukan pemeriksaan kesehatan secara rutin untuk memantau kondisi Anda pascapersalinan dan memastikan pemulihan yang baik serta kesehatan bayi Anda.";
        } else {
            $pesan = "Usia $usia Tahun, kehamilan pada usia remaja meningkatkan risiko kekurangan gizi, anemia, dan kelahiran prematur. Pastikan Anda mendapatkan dukungan nutrisi yang memadai dan melakukan pemantauan kesehatan secara rutin untuk mencegah komplikasi lebih lanjut. Konsumsi makanan yang kaya zat besi, kalsium, dan protein sangat penting untuk membantu pemulihan dan menjaga kesehatan Anda serta bayi.";
        }

        if ($this->kehamilan == 1 || $this->kehamilan == 2) {
            $pesan = $pesan . "\n\nKehamilan pertama atau kedua biasanya membawa risiko yang lebih rendah dibandingkan dengan kehamilan yang lebih lanjut. Namun, tetaplah menjaga pola makan bergizi seimbang dan konsultasi secara rutin dengan tenaga kesehatan untuk memastikan bahwa pemulihan pascapersalinan Anda berjalan dengan baik. Dukungan dari keluarga dan tenaga kesehatan juga sangat penting dalam proses pemulihan Anda.";
        }

        if ($this->kehamilan >= 3) {
            $pesan = $pesan . "\n\nSetiap kehamilan berikutnya membawa risiko yang meningkat terhadap komplikasi seperti anemia, perdarahan postpartum, dan penurunan cadangan nutrisi tubuh. Pastikan untuk memantau kesehatan Anda secara ketat dan berkonsultasi dengan tenaga kesehatan. Meningkatkan asupan nutrisi yang kaya zat besi, kalsium, dan protein sangat penting untuk mendukung pemulihan dan mencegah kelelahan pasca kehamilan.";
        }

        if ($this->metode_persalinan == "normal") {
            $pesan = $pesan . "\n\nDengan riwayat persalinan normal, Anda memiliki risiko obstetri yang lebih rendah dalam persalinan berikutnya. Meski demikian, penting untuk tetap menjaga kesehatan tubuh melalui pola makan bergizi dan aktivitas fisik yang sesuai. Pastikan Anda mengikuti pemeriksaan pascapersalinan rutin untuk memastikan pemulihan optimal dan kesehatan jangka panjang.";
        }

        if ($this->metode_persalinan == "caesar") {
            $pesan = $pesan . "\n\nSetelah persalinan sesar, penting untuk memberikan waktu yang cukup bagi tubuh untuk pulih, terutama jika merencanakan kehamilan berikutnya. Waspadai tanda-tanda infeksi atau komplikasi pada bekas luka operasi. Jaga asupan gizi yang seimbang dan istirahat cukup. Diskusikan dengan dokter tentang rencana pemulihan yang sesuai, serta kapan waktu yang aman untuk mempertimbangkan kehamilan berikutnya.";
        }

        if ($this->jarak_kelahiran < 2 && $this->kehamilan != 1) {
            $pesan = $pesan . "\n\nJarak kehamilan yang kurang dari dua tahun dapat meningkatkan risiko komplikasi seperti kelahiran prematur dan perdarahan. Sangat penting untuk memperhatikan pemulihan pascapersalinan dan memperbaiki status gizi Anda. Konsultasikan dengan dokter tentang rencana pemulihan kesehatan, serta penggunaan kontrasepsi yang sesuai untuk mengatur jarak kehamilan berikutnya guna mengurangi risiko di masa depan.";
        }

        if ($this->jarak_kelahiran > 2 && $this->kehamilan != 1) {
            $pesan = $pesan . "\n\nJarak kehamilan yang lebih dari dua tahun memungkinkan tubuh Anda pulih sepenuhnya antara kehamilan, mengurangi risiko komplikasi obstetri. Pertahankan pola makan sehat dan aktivitas fisik teratur untuk mempersiapkan tubuh Anda tetap sehat di masa mendatang. Selalu konsultasikan dengan dokter untuk pemeriksaan rutin dan perencanaan keluarga.";
        }

        return Attribute::make(
            get: fn() => $pesan
        );
    }
}

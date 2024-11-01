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

        return Attribute::make(
            get: fn() => $pesan
        );
    }
}

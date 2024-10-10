<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusGizi extends Model
{
    use HasFactory;

    protected $table = 'status_gizi';

    protected $fillable = [
        'obsteri_id',
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
}

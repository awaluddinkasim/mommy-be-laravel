<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function statusGizi(): HasOne
    {
        return $this->hasOne(StatusGizi::class, 'obstetri_id');
    }
}

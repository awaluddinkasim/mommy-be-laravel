<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function statusGizi()
    {
        return $this->hasOne(StatusGizi::class, 'obsteri_id');
    }
}

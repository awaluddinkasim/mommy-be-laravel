<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutrisiHarian extends Model
{
    use HasFactory;

    protected $table = 'nutrisi_harian';

    protected $fillable = [
        'user_id',
        'makanan_id',
        'sesi',
        'tanggal'
    ];

    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'makanan_id');
    }
}

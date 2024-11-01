<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertumbuhan extends Model
{
    use HasFactory;

    protected $table = 'pertumbuhan';

    protected $fillable = [
        'baby_id',
        'tanggal',
        'berat_badan',
        'panjang_badan',
    ];
}

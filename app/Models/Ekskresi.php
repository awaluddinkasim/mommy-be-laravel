<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskresi extends Model
{
    use HasFactory;

    protected $table = 'ekskresi';

    protected $fillable = [
        'baby_id',
        'tanggal',
        'ekskresi',
        'pukul'
    ];
}

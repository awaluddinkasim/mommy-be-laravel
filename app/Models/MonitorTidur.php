<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitorTidur extends Model
{
    use HasFactory;

    protected $table = 'monitor_tidur';

    protected $fillable = [
        'baby_id',
        'tanggal',
        'tidur',
        'bangun',
    ];
}

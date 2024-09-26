<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obsteri extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kehamilan',
        'persalinan',
        'abortus',
        'metode_persalinan',
        'jarak_kehamilan'
    ];
}

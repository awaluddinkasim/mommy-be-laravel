<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laktasi extends Model
{
    use HasFactory;

    protected $table = 'laktasi';

    protected $fillable = [
        'user_id',
        'mulai',
        'selesai',
        'posisi'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

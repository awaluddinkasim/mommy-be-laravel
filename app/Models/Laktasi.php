<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laktasi extends Model
{
    use HasFactory;

    protected $table = 'laktasi';

    protected $fillable = [
        'baby_id',
        'mulai',
        'selesai',
        'posisi'
    ];

    public function baby(): BelongsTo
    {
        return $this->belongsTo(Baby::class, 'baby_id');
    }

    public function durasi(): Attribute
    {
        return Attribute::make(
            get: fn() => round(Carbon::parse($this->mulai)->diffInMinutes($this->selesai), 2)
        );
    }
}

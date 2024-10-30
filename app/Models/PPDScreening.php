<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDScreening extends Model
{
    use HasFactory;

    protected $table = 'ppd_screenings';

    protected $fillable = [
        'user_id',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
        'total_score',
        'tingkat_risiko',
        'pesan',
    ];
}

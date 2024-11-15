<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements CanResetPassword
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'tgl_lahir',
        'no_hp',
        'fcm_token'
    ];

    protected $appends = ['usia'];

    public function babies(): HasMany
    {
        return $this->hasMany(Baby::class);
    }

    public function obstetri(): HasMany
    {
        return $this->hasMany(Obstetri::class);
    }

    public function ppdScreening(): HasOne
    {
        return $this->hasOne(PPDScreening::class);
    }

    public function usia(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::parse($this->tgl_lahir)->age
        );
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'tgl_lahir' => 'date',
            'password' => 'hashed',
        ];
    }
}

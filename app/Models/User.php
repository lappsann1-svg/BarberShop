<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'email', 'phone', 'password'])] // Pastikan phone ada di sini
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
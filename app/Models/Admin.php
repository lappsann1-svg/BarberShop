<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    // Admin bisa memiliki banyak percakapan chat dengan pelanggan
    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }
}
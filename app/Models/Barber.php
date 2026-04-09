<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    public function user() {
    return $this->belongsTo(User::class);
}
public function barber() {
    return $this->belongsTo(Barber::class);
}
public function service() {
    return $this->belongsTo(Service::class);
}
}

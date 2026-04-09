<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function user() {
    return $this->belongsTo(User::class);
}
public function admin() {
    return $this->belongsTo(Admin::class);
}
public function messages() {
    return $this->hasMany(Message::class);
}
}

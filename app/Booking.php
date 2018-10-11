<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function slot()
    {
        return $this->belongsTo(Slot::class);
    }
}

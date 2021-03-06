<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Booking extends Model
{
    public function bookable(){
        return $this->belongsTo(Bookable::class);
    }

    public function review(){
        return $this->hasOne(Review::class);
    }

    public function scopeBetweenDate(Builder $query, $from, $to){
        return $query->where('from', '>=', $from)
        ->where('to', '<=', $to);
    }
}

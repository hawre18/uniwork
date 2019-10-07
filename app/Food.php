<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function routin_meals()
    {
        return $this->belongsToMany('App/RoutinMeal', 'food_routin_meals');
    }
    public function reservations()
    {
        return $this->belongsToMany('App\Reservation', 'reservatin_routin_meals', 'reservation_id', 'food_id');
    }

}

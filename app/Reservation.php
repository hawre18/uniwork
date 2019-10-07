<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps=false;
    public function routin_meals()
    {
        return $this->belongsToMany('App\RoutinMeal', 'reservatin_routin_meals', 'reservation_id', 'routin_meal_id');
    }
    public function foods()
    {
        return $this->belongsToMany('App\Food', 'food_routin_meals');
    }
    public function foodLounges()
    {
        return $this->belongsToMany('App\FoodLounge', 'food_lounge_routin_meals');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function routin_meals()
    {
        return $this->belongsToMany('App/RoutinMeal', 'food_routin_meals');
    }
}

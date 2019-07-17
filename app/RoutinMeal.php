<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoutinMeal extends Model
{
    public function meal_type()
    {
        return $this->belongsTo('App\Meal', 'meal_type_id');
    }

    public function foods()
    {
        return $this->belongsToMany('App\Food', 'food_routin_meals');
    }


}

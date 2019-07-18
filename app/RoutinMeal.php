<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoutinMeal extends Model
{

    protected $fillable = ['start_date', 'end_date', 'meal_type_id'];
    public function meal_type()
    {
        return $this->belongsTo('App\Meal', 'meal_type_id');
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

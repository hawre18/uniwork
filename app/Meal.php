<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable =['id','title'];
    public $timestamps=false;
    public function routin_meals()
    {
        return $this->hasMany('App\RoutinMeal', 'meal_type_id');
    }
}

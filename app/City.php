<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['title', 'state_id'];
    public $timestamps=false;
    public function state_type()
    {
        return $this->belongsTo('App\State', 'state_id');
    }
    public function profil()
    {
        return $this->belongsTo('App\State', 'city_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps=false;
    public function city()
    {
        return $this->hasMany('App\City', 'state_id');
    }
    public function profil()
    {
        return $this->hasMany('App\Profil', 'state_id');
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = ['user_id', 'first_name', 'last_name','img_user', 'poste_code', 'birthday',
        'gender', 'job', 'addr', 'tell', 'city_id', 'state_id'];
    public $timestamps=false;
    public function state_type()
    {
        return $this->belongsTo('App\State', 'state_id');
    }

    public function city_type()
    {
        return $this->belongsTo('App\City', 'city_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}

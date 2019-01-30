<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function Clients()
    {
        return $this->hasMany('App\Client');
    }    

}

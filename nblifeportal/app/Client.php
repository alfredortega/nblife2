<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    

    public function Coach()
    {
        return $this->hasOne('App\Coach');
    }

    public function AgeRange()
    {
        return $this->hasOne('App\AgeRange');
    }

    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function SymptomSheets()
    {
        return $this->hasMany('App\SymptomSheet');
    }

    public function HtmaResults()
    {
        return $this->hasMany('App\HtmaResult');
    }

}

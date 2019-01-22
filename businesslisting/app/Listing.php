<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    


        //add one to many relationshio
        public function user()
        {
            return $this->belongsTo('App\User');
        }
    
}

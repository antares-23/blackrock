<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    public function posts(){
        return $this->hasManyThrough('App\Publication','App\User'); ///(tabla1, tabla2, field tabal2 , field tabal1)
    }
}

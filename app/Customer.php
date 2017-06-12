<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function addresses()
    {
    	return $this->morphMany('App\Address', 'addressable');
    }

}

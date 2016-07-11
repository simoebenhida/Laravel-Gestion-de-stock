<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    public function Generation()
    {
      return $this->hasMany('App\Generation');
    }
}

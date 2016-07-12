<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    public function type()
    {
      return $this->belongsTo('App\type');
    }
    
}

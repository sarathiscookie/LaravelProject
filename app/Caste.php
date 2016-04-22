<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caste extends Model
{
   protected $fillable = ['caste'];

   public function subcastes()
   {
      return $this->hasMany('App\Subcaste');
   }
}

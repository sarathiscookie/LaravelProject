<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable = ['religion'];

    public function caste()
    {
        return $this->hasMany('App\Caste');
    }
}

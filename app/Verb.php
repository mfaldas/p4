<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Verb extends Model
{
    public function favorites()
    {
        return $this->belongsToMany('App\Favorite')->withTimestamps();
    }
}

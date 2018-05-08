<?php
/**
 * Verb.php
 * Verb Eloquent Model
 * Created by: Marc-Eli Faldas
 * Last Modified: 5/8/2018
 * Has a Many-to-Many relationship with Verbs.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verb extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}

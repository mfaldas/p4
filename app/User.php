<?php

/**
 * User.php
 * Verb Eloquent Model
 * Last Modified: 5/8/2018
 * Has a Many-to-Many relationship with Users.
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verbs()
    {
        return $this->belongsToMany('App\Verb')->withTimestamps();
    }
}

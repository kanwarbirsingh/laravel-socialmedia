<?php

namespace App;

use Illuminate\Auth\Authenticatable as IlluminateAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use IlluminateAuthenticatable;

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}

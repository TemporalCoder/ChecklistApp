<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Droids extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}

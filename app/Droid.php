<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Droid extends Model
{
    protected $guarded = [];

    protected $table = 'roles';

    protected $fillable = [ 'name' ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];

    public function persons()
    {
        return $this->belongsToMany(Person::class)->withTimestamps();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyNumber extends Model
{
    protected $guarded = [];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function customerList()
    {
        return $this->hasMany(Customer::class);
    }
}

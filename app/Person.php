<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * @package App
 *
 * @property integer id
 * @property string name
 * @property string email
 * @property \App\MyNumber myNumber
 * @property \App\Account accounts
 */
class Person extends Model
{
    protected $guarded = [];

    public function myNumber()
    {
        return $this->hasOne(MyNumber::class);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
}

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
 */
class Person extends Model
{
    protected $guarded = [];

    public function myNumber()
    {
        return $this->hasOne(MyNumber::class);
    }
}

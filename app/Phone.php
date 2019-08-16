<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Phone
 * @package App
 * @property string phone
 * @property integer customer_id
 */
class Phone extends Model
{
    protected $fillable = [
        'phone',
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

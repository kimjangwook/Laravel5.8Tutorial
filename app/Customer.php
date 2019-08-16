<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [
        'phone', 'customer_id'
    ];
    protected $attributes = [
        'active' => 1
    ];

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
    public function scopeInactive($query)
    {
        return $query->where('active', false);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function activeOptions() {
        return [
            true => '활성',
            false => '비활성',
        ];
    }


}

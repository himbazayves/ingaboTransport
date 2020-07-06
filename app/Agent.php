<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'first_name','last_name' ,'phone_number','district','sector','cell','company'
    ];

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}

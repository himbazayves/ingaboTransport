<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volonteer extends Model
{
    protected $fillable = [
        'first_name','last_name' ,'phone_number','district','sector','cell'
    ];

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}

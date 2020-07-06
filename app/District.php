<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    function province(){

        return $this->belongsTo('App\Province');
      }

      function sectors(){

        return $this->hasMany('App\Sector');
      }

      function cells(){

        return $this->hasMany('App\Cell');
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    protected $table = 'sensores';

    public function values()
    {
        return $this->hasMany('App\value', 'sensor_id', 'id');
    }

}

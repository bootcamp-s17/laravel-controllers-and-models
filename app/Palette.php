<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    //

    public function colors()
    {
        return $this->belongsToMany('App\Color');
    }

}

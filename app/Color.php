<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    // The colors table does not have timestamps.
    // We need to tell Eloquent to not use them.
    public $timestamps = false;

}

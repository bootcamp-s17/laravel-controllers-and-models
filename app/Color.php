<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{

    // The colors table does not have timestamps.
    // We need to tell Eloquent to not use them.
    public $timestamps = false;

    // Enable soft deletes for this class
    use SoftDeletes;

    // These fields should be mutated to dates.
    // See: mutators (https://laravel.com/docs/5.4/eloquent-mutators)
    protected $dates = ['deleted_at'];

    public function palettes()
    {
        return $this->belongsToMany('App\Palette');
    }
}

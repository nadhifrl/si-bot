<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sarana extends Model
{
    protected $table='sarana';
    protected $guarded=['id'];

    public function setJudulAtrribute($value)
    {
        $this->attributes['judul'] = Str::judul($value, '-');
    }

    public function getRouteKeyName()
    {
        return 'judul';
    }
}

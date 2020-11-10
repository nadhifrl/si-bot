<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $guarded = ['id'];

    public function setJadwalAtrribute($value)
    {
        $this->attributes['jadwal'] = Str::jadwal($value, '-');
    }

    public function getRouteKeyName()
    {
        return 'jadwal';
    }
}

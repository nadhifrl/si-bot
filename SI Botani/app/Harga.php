<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
class Harga extends Model
{
    protected $table = 'harga';
    protected $guarded = [];

    public function pemesanantiket()
    {
        return $this->belongsTo('App\PemesananTiket');
    }
}

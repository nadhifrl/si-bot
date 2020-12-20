<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PemesananTiket extends Model
{
    protected $table = 'pemesanantiket';
    protected $guarded = [];

    public function pembayarantiket()
    {
        return $this->belongsTo('App\PembayaranTiket');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function harga()
    {
        return $this->belongsTo('App\Harga');
    }
}

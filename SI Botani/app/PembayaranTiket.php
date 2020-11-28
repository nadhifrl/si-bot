<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranTiket extends Model
{


    protected $table = 'pembayarantiket';
    protected $guarded = [];


    public function pemesanantiket()
    {
        return $this->belongsTo('App\PemesananTiket');
    }
}

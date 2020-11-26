<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranTiket extends Model
{


    public $timestamps = false;
    protected $table = 'pembayarantiket';
    protected $guarded = [];


    public function pemesanantiket()
    {
        return $this->belongsTo('App\PemesananTiket');
    }
}

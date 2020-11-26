<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PemesananTiket extends Model
{
    protected $table = 'pemesanantiket';
    public $timestamps = false;
    protected $guarded = [];

    public function pembayarantiket()
    {
        return $this->belongsTo('App\PembayaranTiket');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}

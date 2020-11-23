<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    public function pembayaran()
    {
        return $this->belongsTo('App\Pembayaran');
    }

    public $timestamps = false;
    protected $table = 'pemesanantiket';
    protected $guarded = [];
}

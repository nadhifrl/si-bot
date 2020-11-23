<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan');
    }

    public $timestamps = false;
    protected $table = 'pembayarantiket';
    protected $guarded = [];
}

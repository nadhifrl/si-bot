<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public $timestamps = false;
    protected $table = 'pembayarantiket';
    protected $guarded = [];
}

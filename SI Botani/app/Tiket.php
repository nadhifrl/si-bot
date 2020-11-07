<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    public $timestamps = false;
    protected $table = 'pemesanantiket';
    protected $fillable = ['name', 'nomortelepon', 'alamat', 'tanggalpembelian', 'jumlahtiket', 'totalharga', 'status'];
}

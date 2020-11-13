<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana;
use App\Jadwal;

class InformasiController extends Controller
{
    public function index()
    {
        $sarana = Sarana::all();
        $jadwal = Jadwal::all();
        return view ('pengunjung.informasi',compact('sarana','jadwal'));
    }

}

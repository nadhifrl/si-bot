<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PemesananPengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function pemesanantiket(){
        return view ('pengunjung.pemesanantiket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create ([
            'name' => $request->name, 
            'nomortelepon'=>$request->nomortelepon,
            'alamat'=>$request->alamat,
            'tanggal'=>$request->tanggal,
            'jumlahtiket'=>$request->jumlahtiket,
            'totalharga'=>$request->totalharga,

        ]);
        return redirect('/pembayarantiket')
        ->with('success','Telah berhasil Membuat Akun');
    }
}

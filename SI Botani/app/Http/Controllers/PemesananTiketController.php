<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;
use Auth;

class PemesananTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('pengunjung.pemesanantiket');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengunjung.pembayarantiket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();

        Tiket::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'nomortelepon' => $request->nomortelepon,
            'alamat' => $request->alamat,
            'tanggalpembelian' => $request->tanggalpembelian,
            'jumlahtiket' => $request->jumlahtiket,
            'totalharga' => $request->totalharga,
            'status' => "Menunggu"
        ]);
        return redirect()->route('pembayarantiket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pemesanantiket=Tiket::find($id);
        if(!$pemesanantiket){
            return redirect()->back();
        }
        $pemesanantiket->delete();
        return redirect()->route('pembayarantiket.index');
        }

}

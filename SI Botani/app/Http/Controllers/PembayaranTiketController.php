<?php

namespace App\Http\Controllers;

use App\Tiket;
use Illuminate\Http\Request;
use Auth;

class PembayaranTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $pembayarantiket = Tiket::where('user_id', $user->id)->where('status', 'Menunggu')->first();
        // dd($pembayarantiket);
        // dd($pembayarantiket);
        return view('pengunjung.pembayarantiket')->with('pembayarantiket', $pembayarantiket);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengunjung.detailtiket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $user = Auth::user();
        $pembayarantiket = Tiket::where('user_id', $user->id)->find($id);
        $pembayarantiket->update([
            'bank' => $request->bank,
            'namarekeningpengirim' => $request->namarekeningpengirim,
            'nomorrekening' => $request->nomorrekening,
            'status' => "Proses"
        ]);
        return redirect()->route('detailtiket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $pembayarantiket = Tiket::where('user_id', $user->id)->find($id);

        if (!$pembayarantiket) {
            return redirect()->back();
        }
        $pembayarantiket->delete();
        return redirect()->route('pemesanantiket.index');
    }
}

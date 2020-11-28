<?php

namespace App\Http\Controllers;

use App\PemesananTiket;
use App\PembayaranTiket;
use Illuminate\Http\Request;
use App\Tiket;
use Auth;
use Illuminate\Support\Facades\DB;


class DetailTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        // $detailtiket = PemesananTiket::orderBy('id', 'DESC')->where('user_id', $user->id)->get();
        $detailtiket = DB::table('users')
            ->join('pemesanantiket', 'pemesanantiket.user_id', 'users.id')
            ->join('pembayarantiket', 'pembayarantiket.pemesanantiket_id', 'pemesanantiket.id')
            ->select('pembayarantiket.*')
            ->orderBy('id', 'DESC')
            ->where('user_id', $user->id)
            ->get();
        // dd($detailtiket);
        return view('pengunjung.detailtiket', compact('detailtiket'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailtiket = PemesananTiket::find($id);
        return view('pengunjung.cetaktiket', compact('detailtiket'));
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
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tiket;
use Auth;


class DetailTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('pengunjung.detailtiket');
        // $user = Auth::user();
        // $detailtiket = Tiket::where('user_id', $user->id)->where('status', 'Proses')->first();
        // $detailtiket = Tiket::latest()->get();
        // dd($pembayarantiket);
        // dd($pembayarantiket);
        // return view('pengunjung.detailtiket', compact('detailtiket'));
        // dd($pembayarantiket);
        // dd($pembayarantiket);
        $user = Auth::user();
        // $detailtiket = Tiket::where('user_id', $user->id)->where('status', 'Proses')->first();
        // return view('pengunjung.detailtiket')->with('detailtiket', $detailtiket);
        $detailtiket = Tiket::all();
        $detailtiket = Tiket::where('user_id', $user->id)->where('status', 'Proses')->first();
        return view('pengunjung.detailtiket')->with('detailtiket', $detailtiket);
        // return view('pengunjung.detailtiket', compact('pemesanantiket'));
        // return view('pengunjung.detailtiket')->with('detailtiket', $detailtiket);
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
        //
    }
}

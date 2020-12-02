<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\PembayaranTiket;
use App\PemesananTiket;

class LonjakanPengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PemesananTiket::latest()->get();;
        return view('admin.lonjakanpengunjung', compact('data'));
    }


    public function peramalan()
    {
        // $data = PemesananTiket::where('id', $id)->get()->all();
        // $data = PemesananTiket::where('slug', $slug)->get()->all();

        $month = Carbon::now()->subMonth(2);
        $month1 = Carbon::now()->subMonth(1);
        $month2 = Carbon::now();
        $month3 = Carbon::now()->addMonthNoOverflow(1);

        $pembayaran = PembayaranTiket::where('status', 'Sukses')->whereMonth('created_at', $month)
            ->get()->all();
        $pembayaran1 = PembayaranTiket::where('status', 'Sukses')->whereMonth('created_at', $month1)
            ->get()->all();
        $pembayaran2 = PembayaranTiket::where('status', 'Sukses')->whereMonth('created_at', $month2)
            ->get()->all();
        $pembayaran3 = PembayaranTiket::where('status', 'Sukses')->whereMonth('created_at', $month3)
            ->get()->all();

        $count = count($pembayaran);

        $count1 = count($pembayaran1);

        $count2 = count($pembayaran2);

        $wma = (($count2 * 3)) + (($count1 * 2)) + (($count * 1)) / (6);

        // dd($wma)    ;

        return view('admin.lonjakanpengunjung', compact([
            'wma', 'count', 'count1', 'count2',
            'month', 'month1', 'month2', 'month3'
        ]));
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

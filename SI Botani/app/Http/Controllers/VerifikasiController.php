<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PembayaranTiket;
use App\PemesananTiket;
use Storage;
use App\Tiket;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Author;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verifikasi = DB::table('users')
            ->join('pemesanantiket', 'pemesanantiket.user_id', 'users.id')
            ->join('pembayarantiket', 'pembayarantiket.pemesanantiket_id', 'pemesanantiket.id')
            ->select('users.name', 'pembayarantiket.*')
            ->get();
        return view('admin.verifikasi.index', compact('verifikasi'));
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

        // return FacadesAuth::table('users')
        //     ->join('pemesanantikets', 'pemesanantikets.user_id', 'users.id')
        //     ->join('pembayarantikets', 'pembayarantikets.pemesanantiket_id', 'pemesanantikets.id')
        //     ->select('pembayarantikets.bank')
        //     ->get();
        $pemesanan = PemesananTiket::find($id);
        $pembayaran = PembayaranTiket::find($id);
        return view('admin.verifikasi.detail', compact('pemesanan', 'pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $verifikasi = PembayaranTiket::find($id);
        return view('admin.verifikasi.edit', compact('verifikasi'));
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
        $verifikasi = PembayaranTiket::find($id);

        // if ($pemesanantiket = PembayaranTiket::where('status', 'Sukses', 'Gagal')) {
        //     return redirect()->route('pemesanantiket.index')->with('status', 'Anda memiliki pesanan yang belum dibayar. Mohon bayar pemesanan sebelumnya');
        // } else {
        $verifikasi->update([
            'status' => $request->status,
        ]);

        // $verifikasi = PemesananTiket::find($id);
        // $verifikasi->update([
        //     'status' => $request->status,
        // ]);
        return redirect()->route('verifikasi.index');
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

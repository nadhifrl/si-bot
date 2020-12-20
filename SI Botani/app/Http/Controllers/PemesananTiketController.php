<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemesananTiket;
use App\Harga;
use Auth;
use Illuminate\Support\Carbon;

class PemesananTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('pengunjung.pemesanantiket');
        $user = Auth::user();
        $harga = Harga::all();
        $tanggal = Carbon::now();
        $pemesanantiket = PemesananTiket::where('user_id', $user->id)->where('status', 'Menunggu')->first();
        // dd($pembayarantiket);
        // dd($pembayarantiket);
        return view('pengunjung.pemesanantiket', compact('harga','tanggal'))->with('pemesanantiket', $pemesanantiket);
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
        $this->validate(
            $request,
            [
                'namapemesan' => ['required','max:100'],
                'nomortelepon' => ['required', 'min:11','max:13' ],
                'alamat' => ['required','max:100'],

                'tanggalpembelian' => 'required|after:yesterday',
                'jumlahtiket' => ['required', 'numeric', 'min:1', 'max:100'],


            ],
            [

                'nomortelepon.min' => 'Minimal harus 11 nomor',
                 'nomortelepon.max' => 'Maksimal harus 13 nomor',
                'nomortelepon.required' => 'Harap isi bidang ini',
                'alamat.required' => 'Harap isi bidang ini',
                'alamat.max' => 'Maksimal harus 100 karakter',
                'tanggalpembelian.required' => 'Harap isi bidang ini',
                'tanggalpembelian.after' => 'Tanggal yang dipilih, minimal harus tanggal hari ini',
                'jumlahtiket.required' => 'Harap isi bidang ini',
                'namapemesan.required' => 'Harap isi bidang ini',
                'namapemesan.max' => 'Maksimal harus 100 huruf',
                'jumlahtiket.numeric' => 'Harap Berisikan Nomor',
                'jumlahtiket.min' => 'Minimal harus memasukkan 1 jumlah tiket',
                 'jumlahtiket.max' => 'Maksimal harus memasukkan 100 jumlah tiket',
            ]
        );

        $user = Auth::user();
        if ($pemesanantiket = PemesananTiket::where('user_id', $user->id)->where('status', 'Menunggu')->first()) {
            return redirect()->route('pemesanantiket.index')->with('status', 'Anda memiliki pesanan yang belum dibayar. Mohon bayar pemesanan sebelumnya');
        } else {
            PemesananTiket::create([
                'user_id' => $user->id,
                'namapemesan' => $request->namapemesan,
                'nomortelepon' => $request->nomortelepon,
                'alamat' => $request->alamat,
                'tanggalpembelian' => $request->tanggalpembelian,
                'jumlahtiket' => $request->jumlahtiket,
                'totalharga' => $request->totalharga,
                'status' => "Menunggu"
            ]);
        }
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
        $user = Auth::user();
        $pembayarantiket = PemesananTiket::find($id);
        $pembayarantiket->update([
            'status' => "Gagal"
        ]);
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
        $pemesanantiket = PemesananTiket::find($id);
        if (!$pemesanantiket) {
            return redirect()->back();
        }
        $pemesanantiket->delete();
        return redirect()->route('pembayarantiket.index');
    }
}

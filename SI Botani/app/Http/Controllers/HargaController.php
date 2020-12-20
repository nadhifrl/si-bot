<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harga;
use Auth;

class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harga = Harga::latest()->get();
        return view('admin.harga.index', compact('harga'));
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
        $harga = Harga::find($id);
        return view('admin.harga.edit', compact('harga'));
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

        $this->validate(
            $request,
            [
                'harga' => ['required', 'numeric', 'min:10000', 'max:50000'],

            ],
            [

                'harga.min' => 'Harga yang dimasukkan minimal 10000 ',
                'harga.max' => 'Harga yang dimasukkan maksimal 50000 ',
                'harga.numeric' => 'Harap Berisikan Nomor',
                'harga.required' => 'Harap isi bidang ini',
            ]
        );

        $harga = Harga::find($id);
        $user = Auth::user();
        $pemesanantiket = Harga::where('user_id', $user->id);
        $harga->update($request->all());
        return redirect()->route('harga.index');
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

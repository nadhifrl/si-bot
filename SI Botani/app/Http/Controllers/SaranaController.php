<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarana=Sarana::latest()->get();
        return view ('admin.sarana.index', compact('sarana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('admin.sarana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sarana::create($request->all());
        $image=$request->file('gambar')->store('jadwal');
        Sarana::create([
            'judul'=>\Str::slug($request->judul),
            'body'=>$request->body,
            'gambar'=>$image
        ]);
        return redirect()->route('sarana.index');
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
        $sarana= Sarana::find($id);
        return view('admin.sarana.edit',compact('sarana'));
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
        $sarana= Sarana::find($id);
        $sarana->update($request->all());
        return redirect()->route('sarana.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sarana=Sarana::find($id);
        if(!$sarana){
            return redirect()->back();
        }
        $sarana->delete();
        return redirect()->route('sarana.index');
    }
}

<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Sarana;
use Auth;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarana = Sarana::latest()->get();
        return view('admin.sarana.index', compact('sarana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.sarana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'body' => 'required',
            'gambar' => 'mimes:jpg,jpeg,bpm,png',

        ]);
        $image = $request->file('gambar')->store('sarana');
        $user = Auth::user();
        $pemesanantiket = Sarana::where('user_id', $user->id);
        Sarana::create([
            'user_id' => $user->id,
            'judul' => \Str::slug($request->judul),
            'body' => $request->body,
            'gambar' => $image
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
        $sarana = Sarana::find($id);
        return view('admin.sarana.detail', compact('sarana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sarana = Sarana::find($id);
        return view('admin.sarana.edit', compact('sarana'));
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
        $this->validate($request, [
            'judul' => 'required',
            'body' => 'required',
            'gambar' => 'mimes:jpg,jpeg,bpm,png',

        ]);

        $user = Auth::user();
        $pemesanantiket = Sarana::where('user_id', $user->id);
        if (empty($request->file('gambar'))) {
            $sarana = Sarana::find($id);
            //Storage::delete($sarana->gambar);
            $sarana->update([
                'user_id' => $user->id,
                'judul' => \Str::slug($request->judul),
                'body' => $request->body,
                //'gambar'=>$request->file('gambar')->store('sarana'),
            ]);
        } else {
            $sarana = Sarana::find($id);
            Storage::delete($sarana->gambar);
            $sarana->update([
                'user_id' => $user->id,
                'judul' => \Str::slug($request->judul),
                'body' => $request->body,
                'gambar' => $request->file('gambar')->store('sarana'),
            ]);
        }
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
        $sarana = Sarana::find($id);
        if (!$sarana) {
            return redirect()->back();
        }
        Storage::delete($sarana->gambar);
        $sarana->delete();
        return redirect()->route('sarana.index');
    }

    // public function destroy($id)
    // {
    //     $sarana= Sarana::find($id);
    //     Sarana::destroy($sarana->id);
    //     return redirect()->route('sarana.index');
    // }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/pengunjung');
        }
    }


    public function admin()
    {
        return view('admin.dashboardAdmin');
    }

    public function pengunjung()
    {
        return view('pengunjung.dashboardpengunjung');
    }

    public function detailtiket()
    {
        return view('pengunjung.detailtiket');
    }

    public function verifikasi()
    {
        return view('admin.verifikasi');
    }
}

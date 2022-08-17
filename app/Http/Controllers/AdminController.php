<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pengumuman;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminpage()
    {
        $jumlah_user = DB::table('users')->count();
        $jumlah_saran = DB::table('saran')->count();
        $jumlah_komentar = DB::table('komentar')->count();
        $jumlah_berita = DB::table('berita')->count();
        $pengumuman = Pengumuman::paginate(5);
        return view('indexadmin',  compact('jumlah_user', 'jumlah_saran', 'jumlah_komentar', 'jumlah_berita', 'pengumuman'));
        
    }

    public function adminbutton()
    {
        return view('buttons');
    }

    public function components()
    {
        return view('components');
    }

    public function general()
    {
        return view('general');
    }

    public function toastr()
    {
        return view('toastr');
    }

    public function table()
    {
        return view('table');
    }

    public function chart()
    {
        return view('chartjs');
    }

    public function simple()
    {
        return view('simple');
    }

    public function profile()
    {
        return view('profile');
    }
}

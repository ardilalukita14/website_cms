<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_user = DB::table('users')->count();
        $jumlah_saran = DB::table('saran')->count();
        // $jumlah2 = DB::table('barang')->count();
        return view('indexadmin', compact('jumlah_user', 'jumlah_saran'));
    }

    public function indexHome(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $data = Berita::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $data = Berita::orderBy('id', 'desc')->paginate(10); // Pagination menampilkan 5 data
        }
        return view('home',compact('data'));
    }
    //     $role=Auth::user()->role;

    //     if($role=='administrator')
    //     {
    //         return view('indexadmin');
    //     }

    //     if($role=='penulis')
    //     {
    //         return view('penulis.berita');
    //     }

    //     else{
    //         return view('editor.berita');
    //     }
    // }
}

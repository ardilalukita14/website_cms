<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $data = Berita::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $data = Berita::orderBy('id', 'desc')->paginate(10); // Pagination menampilkan 5 data
        }
        return view('index',compact('data'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function category()
    {
        return view('category');
    }
   


}

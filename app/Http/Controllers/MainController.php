<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        return view('index');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use Session;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komentar = Komentar::orderBy('created_at','DESC') ->paginate(10);
        return view('admin.komentar',compact('komentar')) ;
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
        $data = Komentar::find($id);
        return view('admin.edit_komen',compact('data')) ;
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
        $komentar = Komentar::find($id);
        $komentar->status = $request->status;
        $komentar->save();
        if ($komentar) {
            Session::flash('success','Update Data Sukses');
            return redirect()->route('admin.komentar') ;
        } else {
            Session::flash('success','Update Data Gagal');
            return redirect()->route('admin.komentar') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komentar = Komentar::find($id);
        $komentar->delete();
        if ($komentar) {
            Session::flash('success','Hapus Data Sukses');
            return redirect()->route('admin.komentar') ;
        } else {
            Session::flash('success','Hapus Data Gagal');
            return redirect()->route('admin.komentar') ;
        }
    }
}

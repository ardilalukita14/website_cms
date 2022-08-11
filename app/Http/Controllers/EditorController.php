<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\Kategori;
use Session;


class EditorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Berita::orderBy('created_at','DESC')
                ->paginate(10);
        return view('editor.berita',compact('data'));
    }

    public function cari(Request $request)
    {
        $key = $request->get('cari');
        $data = Berita::where('judul','LIKE','%'.$key.'%')->get();
        return view('editor.berita',compact('data')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Kategori::all();
        return view('editor.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'foto';
        $file->move($path,$org);

        $Berita = new Berita;
        $Berita->kategori_id = $request->kategori;
        $Berita->judul = $request->judul;
        $Berita->author = $request->author;
        $Berita->tanggal = date('Y-m-d');
        $Berita->isi = $request->isi;
        $Berita->foto = $org;
        $Berita->top_news = 'tidak aktif';
        $Berita->status = 'aktif' ;
        $Berita->save();
        if ($Berita) {
            Session::flash('success','Sukses Tambah Data'); 
            return redirect()->route('editor.berita');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('editor.berita');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Berita::find($id);
        return view('editor.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kategori::all();
        $berita = Berita::find($id);
        return view('editor.edit',compact('data','berita'));
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
        $foto = $request->file('foto');
        if ($foto == "") {
            $Berita = Berita::find($id);
            $Berita->kategori_id = $request->kategori;
            $Berita->judul = $request->judul;
            $Berita->author = $request->author;
            $Berita->isi = $request->isi;
            $Berita->top_news =  $request->news;
            $Berita->status =  $request->status;
            $Berita->save();

           if ($Berita) {
            Session::flash('success','Sukses Update Data');
                return redirect()->route('editor.berita');
            } else {
                Session::flash('success','Failed Update Data');
                return redirect()->route('editor.berita');
            }
        } else {
            $file = $request->file('foto');
            $org = $file->getClientOriginalName();
            $path = 'foto';
            $file->move($path,$org);

            $Berita = Berita::find($id) ;
            $Berita->kategori_id = $request->kategori;
            $Berita->judul = $request->judul;
            $Berita->author = $request->author;
            $Berita->isi = $request->isi;
            $Berita->foto = $org;
            $Berita->top_news =  $request->news;
            $Berita->status =  $request->status;
            $Berita->save();
            if ($Berita) {
                Session::flash('success','Sukses Update Data');
                return redirect()->route('editor.berita');
            } else {
                Session::flash('success','Failed Update Data');
                return redirect()->route('editor.berita');
            }
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
        $Berita = Berita::find($id);
        $Berita->delete();
         if ($Berita) {
            Session::flash('success','Sukses Hapus Data'); 
            return redirect()->route('editor.berita');
        } else {
            Session::flash('Berita Gagal Dihapus','Gagal');
            return redirect()->route('editor.berita');
        }

    }

    public function editorpage()
    {
        $jumlah_user = DB::table('users')->count();
        $jumlah_saran = DB::table('saran')->count();
        return view('editor.indexEditor',  compact('jumlah_user', 'jumlah_saran'));
    }


}
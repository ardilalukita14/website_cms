<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Komentar;
use Session;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.dashboard',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function lifestyle()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.lifestyle',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function kesehatan()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.kesehatan',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function teknologi()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.teknologi',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function ekonomi()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.ekonomi',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function senbud()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.senbud',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function pertanian()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.pertanian',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function kraetivitas()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.kreativitas',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
    }

    public function kriminalitas()
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kesehatan =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',3)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $lifestyle =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',1)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $teknologi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $senbud    =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $pertanian =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kreatif   =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',8)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $kriminal  =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',9)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tops =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('top_news','aktif')
                    ->take(8)
                    ->get();
        $latest =  Berita::orderBy('created_at','DESC')
                    ->where('status','aktif')
                    ->where('tanggal', date('Y-m-d'))
                    ->take(8)
                    ->get();

        return view('reader.kriminalitas',compact('semua','ekonomi','kesehatan', 'lifestyle', 'teknologi','senbud', 'pertanian', 'kreatif', 'kriminal', 'tops', 'latest')) ;
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = Berita::find($id);
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->where('tanggal', date('Y-m-d'))
                ->take(6)
                ->get();
        $komen = Komentar::orderBy('created_at','DESC')
                ->where('berita_id',$id)
                ->where('status','aktif')
                ->get();
        return view('reader.detail',compact('news','semua','komen'));
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
        $komen = new Komentar;
        $komen->nama = $request->nama;
        $komen->email = $request->email;
        $komen->keterangan = $request->isi;
        $komen->tanggal = date('Y-m-d');
        $komen->status = 'aktif';
        $komen->berita_id = $id;
        $komen->save();

        if ($komen) {
            Session::flash('success','Komentar berhasil ditambahkan');
            return redirect()->back();
        } else {
            Session::flash('success','Komentar gagal ditambahkan');
            return redirect()->back();
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
        //
    }

    public function list($id)
    {
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(6)
                ->get();
        $ekonomi =  Berita::orderBy('created_at','DESC')
                    ->where('kategori_id',$id)
                    ->where('status','aktif')
                    ->get();
        return view('reader.list',compact('semua','ekonomi')) ;
    }

    public function cari(Request $request)
    {
        $key = $request->get('cari');
        $ekonomi = Berita::where('judul','LIKE','%'.$key.'%')->get();
        $semua = Berita::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(6)
                ->get();
        return view('reader.list',compact('ekonomi','semua')) ;
    }
}

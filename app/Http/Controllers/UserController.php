<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pgm = User::where('Judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pgm = User::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('profile.index', compact('pgm'));
    }

    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('profile.edit');
    }
}

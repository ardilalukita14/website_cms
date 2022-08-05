<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Alert;

class ProfileController extends Controller
{
    public function edit() {
        Alert::success('Success Toast','success'); 
        return view('profile.edit')->with('user', auth()->user());
    }

    public function update(Request $request) {
        Alert::success('Success Toast','success'); 
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);
        return redirect()->route('profile.edit');
    }
}

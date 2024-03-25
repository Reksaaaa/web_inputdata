<?php

namespace App\Http\Controllers;

use App\Models\Cek;
use Illuminate\Http\Request;

class CekController extends Controller
{
    public function tabel() {
        $cek = Cek::all();
        return view('cek.tabel', compact(['cek']));
    }

    public function create() {
        return view('cek.create');
    }

    public function hasil(Request $request) {
        // dd($request->all());
        Cek::create($request->except('_token', 'submit'));
        return redirect('/cek');
    }
}

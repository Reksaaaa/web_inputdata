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

    public function edit($id){
        $cek = Cek::find($id);
        // dd($cek);
        return view('cek.edit', compact(['cek']));
    }

    public function update($id, Request $request) {
        $cek = Cek::find($id);
        $cek->update($request->except('_token', 'submit'));
        return redirect('/cek');
    }

    public function destroy($id) {
        $cek = Cek::find($id);
        $cek->delete();
        return redirect('/cek');
    }
}

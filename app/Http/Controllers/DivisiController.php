<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DivisiController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Divisi::query();

        if ($keyword) {
            $query->where('nama_divisi', 'LIKE', "%$keyword%");
        }

        $data['divisi'] = $query->paginate(5)->appends(['keyword' => $keyword]);

        return view('divisi.info_divisi', $data);
    }

    public function create() {
        $data['divisi'] = Divisi::all();
        return view('divisi.create_divisi', $data);
    }

    public function save(Request $request) {
        $request->validate([
            'nama_divisi' => [
                'required',
                Rule::unique('tb_divisi', 'nama_divisi')
            ]
        ]);

        $nama_divisi = $request->nama_divisi;

        Divisi::create([
            'nama_divisi' => $nama_divisi
        ]);

        return redirect()->route('divisi.info_divisi');
    }

    public function edit($x) {
        $data ['divisi'] = Divisi::find($x);
        return view('divisi.edit_divisi', $data);
    }

    public function ubah(Request $request, $x) {
        $request->validate([
            'nama_divisi' => [
                'required',
                Rule::unique('tb_divisi', 'nama_divisi')
            ]
        ]);

        $nama_divisi = $request->nama_divisi;

        $divisi = Divisi::find($x);
        $divisi->update([
            'nama_divisi' => $nama_divisi
        ]);

        return redirect()->route('divisi.info_divisi');
    }

    public function destroy($x) {
        $divisi = Divisi::find($x);
        $divisi->delete();

        return redirect()->route('divisi.info_divisi');
    }
}

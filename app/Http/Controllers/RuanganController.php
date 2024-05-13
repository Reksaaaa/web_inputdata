<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RuanganController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Ruangan::query();

        if ($keyword) {
            $query->where('nama_ruangan', 'LIKE', "%$keyword%");
        }

        $data['ruangan'] = $query->paginate(5)->appends(['keyword' => $keyword]);

        return view('ruangan.info_ruangan', $data);
    }

    public function create() {
        $data['ruangan'] = Ruangan::all();
        return view('ruangan.create_ruangan', $data);
    }

    public function save(Request $request) {
        $request->validate([
            'nama_ruangan' => [
                'required',
                Rule::unique('tb_ruangan', 'nama_ruangan')
            ]
        ]);

        $nama_ruangan = $request->nama_ruangan;

        Ruangan::create([
            'nama_ruangan' => $nama_ruangan
        ]);

        return redirect()->route('ruangan.info_ruangan');
    }

    public function edit($x) {
        $data ['ruangan'] = Ruangan::find($x);
        return view('ruangan.edit_ruangan', $data);
    }

    public function ubah(Request $request, $x) {
        $request->validate([
            'nama_ruangan' => [
                'required',
                Rule::unique('tb_ruangan', 'nama_ruangan')
            ]
        ]);

        $nama_ruangan = $request->nama_ruangan;

        $ruangan = Ruangan::find($x);
        $ruangan->update([
            'nama_ruangan' => $nama_ruangan
        ]);

        return redirect()->route('ruangan.info_ruangan');
    }

    public function destroy($x) {
        $ruangan = Ruangan::find($x);
        $ruangan->delete();

        return redirect()->route('ruangan.info_ruangan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TipeController extends Controller
{
    public function index() {
        return view('tipe.info_tipe');
    }
    // public function index(Request $request)
    // {
    //     $keyword = $request->input('keyword');

    //     $query = Tipe::query();

    //     if ($keyword) {
    //         $query->where('nama_tipe', 'LIKE', "%$keyword%");
    //     }

    //     $data['tipe'] = $query->paginate(5)->appends(['keyword' => $keyword]);

    //     return view('tipe.info_tipe', $data);
    // }

    public function create() {
        return view('tipe.create_tipe');
    }

    // public function create() {
    //     $data['tipe'] = Tipe::all();
    //     return view('tipe.create_tipe', $data);
    // }

    public function save(Request $request) {
        $request->validate([
            'nama_tipe' => [
                'required',
                Rule::unique('tb_tipe', 'nama_tipe')
            ]
        ]);

        $nama_tipe = $request->nama_tipe;

        Tipe::create([
            'nama_tipe' => $nama_tipe
        ]);

        return redirect()->route('tipe.info_tipe');
    }

    public function edit($x) {
        $data ['tipe'] = Tipe::find($x);
        return view('tipe.edit_tipe', $data);
    }

    public function ubah(Request $request, $x) {
        $request->validate([
            'nama_tipe' => [
                'required',
                Rule::unique('tb_tipe', 'nama_tipe')
            ]
        ]);

        $nama_tipe = $request->nama_tipe;

        $tipe = Tipe::find($x);
        $tipe->update([
            'nama_tipe' => $nama_tipe
        ]);

        return redirect()->route('tipe.info_tipe');
    }

    public function destroy($x) {
        $tipe = Tipe::find($x);
        $tipe->delete();

        return redirect()->route('tipe.info_tipe');
    }
    
    // Tipe::create([
    //     'nama_tipe' => $nama_tipe
    // ]);
}

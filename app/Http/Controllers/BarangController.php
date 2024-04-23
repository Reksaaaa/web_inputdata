<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    public function index(Request $request) {
        $keyword = $request->input('keyword');
    
        $query = Barang::query()->select('tb_barang.*', 'tb_tipe.nama_tipe')
                    ->join('tb_tipe', 'tb_tipe.id_tipe', '=', 'tb_barang.id_tipe');
    
        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('tb_barang.kode_perangkat', 'LIKE', "%$keyword%")
                  ->orWhere('tb_barang.nama_perangkat', 'LIKE', "%$keyword%")
                  ->orWhere('tb_tipe.nama_tipe', 'LIKE', "%$keyword%");
            });
        }
    
        $data['barang'] = $query->paginate(5)->appends(['keyword' => $keyword]);
    
        return view('barang.info_barang', $data);
    }
    

    public function create() {
        $data['barang'] = Barang::all();
        $data['tipe'] = Tipe::all();
        return view('barang.create_barang', $data);
    }

    public function save(Request $request) {
        $request->validate([
            'kode_perangkat' => [
                'required',
                Rule::unique('tb_barang', 'kode_perangkat')
            ]
        ]);

        $kode_perangkat = $request->kode_perangkat;
        $nama_perangkat = $request->nama_perangkat;
        $tipe = $request->tipe;

        Barang::create([
            'kode_perangkat' => $kode_perangkat,
            'nama_perangkat' => $nama_perangkat,
            'id_tipe' => $tipe
        ]);

        return redirect()->route('barang.info_barang');
    }

    public function edit($x) {
        $data['barang'] = Barang::find($x);
        $data['tipe'] = Tipe::all();
        return view('barang.edit_barang', $data);
    }

    public function ubah(Request $request, $x){
        $request->validate([
            'kode_perangkat' => [
                'required',
                Rule::unique('tb_barang', 'kode_perangkat')
            ]
        ]);

        $kode_perangkat = $request->kode_perangkat;
        $nama_perangkat = $request->nama_perangkat;
        $tipe = $request->tipe;

        $barang = Barang::find($x);
        $barang->update([
            'kode_perangkat' => $kode_perangkat,
            'nama_perangkat' => $nama_perangkat,
            'id_tipe' => $tipe
        ]);

        return redirect()->route('barang.info_barang');
    }

    public function destroy($x) {
        $barang = Barang::find($x);
        $barang->delete();

        return redirect()->route('barang.info_barang');
    }
}

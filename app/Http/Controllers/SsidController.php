<?php

namespace App\Http\Controllers;

use App\Models\Ssid;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SsidController extends Controller
{
    public function index() {
        return view('ssid.info_ssid');
    }
    // public function index(Request $request)
    // {
    //     $keyword = $request->input('keyword');

    //     $query = Ssid::query();

    //     if ($keyword) {
    //         $query->where('nama_ssid', 'LIKE', "%$keyword%");
    //     }

    //     $data['ssid'] = $query->paginate(5)->appends(['keyword' => $keyword]);

    //     return view('ssid.info_ssid', $data);
    // }

    public function create() {
        return view('ssid.create_ssid');
    }

    // public function create() {
    //     $data['ssid'] = Ssid::all();
    //     return view('ssid.create_ssid', $data);
    // }

    public function save(Request $request) {
        $request->validate([
            'nama_ssid' => [
                'required',
                Rule::unique('tb_ssid', 'nama_ssid')
            ]
        ]);

        $nama_ssid = $request->nama_ssid;

        Ssid::create([
            'nama_ssid' => $nama_ssid
        ]);

        return redirect()->route('ssid.info_ssid');
    }

    public function edit($x) {
        $data['ssid'] = Ssid::find($x);
        return view('ssid.edit_ssid', $data);
    }

    public function ubah(Request $request, $x) {
        $request->validate([
            'nama_ssid' => [
                'required',
                Rule::unique('tb_ssid', 'nama_ssid')
            ]
        ]);

        $nama_ssid = $request->nama_ssid;

        $ssid = Ssid::find($x);
        $ssid->update([
            'nama_ssid' => $nama_ssid
        ]);

        return redirect()->route('ssid.info_ssid');
    }

    public function destroy($x) {
        $ssid = Ssid::find($x);
        $ssid->delete();

        return redirect()->route('ssid.info_ssid');
    }
}

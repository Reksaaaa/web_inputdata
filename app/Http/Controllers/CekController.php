<?php

namespace App\Http\Controllers;

use App\Exports\CekExport;
use App\Models\Barang;
use App\Models\Cek;
use App\Models\Divisi;
use App\Models\Ruangan;
use App\Models\Ssid;
use App\Models\Tipe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Maatwebsite\Excel\Facades\Excel;

class CekController extends Controller
{
    public function home() {
        return view('home');
    }

    public function tabel() {
        return view('cek.tabel');
    }



    // public function tabel() {
    //     $data['cek'] = Cek::join('tb_barang', 'tb_barang.kode_perangkat', '=', 'cek.kode_perangkat')
    //                         ->join('tb_tipe', 'tb_tipe.id_tipe', '=', 'cek.id_tipe')
    //                         ->join('tb_ssid', 'tb_ssid.id_ssid', '=', 'cek.id_ssid')
    //                         ->join('tb_ruangan', 'tb_ruangan.id_ruangan', '=', 'cek.id_ruangan')
    //                         ->join('tb_divisi', 'tb_divisi.id_divisi', '=', 'cek.id_divisi')
    //                         ->select('cek.*', 'tb_barang.kode_perangkat', 'tb_tipe.nama_tipe', 'tb_ssid.nama_ssid', 'tb_ruangan.nama_ruangan', 'tb_divisi.nama_divisi')
    //                         ->paginate(10);
        
    //     return view('cek.tabel', $data);
    // }



    public function filter(Request $request) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        
        
        $data['cek'] = Cek::join('tb_barang', 'tb_barang.kode_perangkat', '=', 'cek.kode_perangkat')
                            ->join('tb_tipe', 'tb_tipe.id_tipe', '=', 'cek.id_tipe')
                            ->join('tb_ssid', 'tb_ssid.id_ssid', '=', 'cek.id_ssid')
                            ->join('tb_ruangan', 'tb_ruangan.id_ruangan', '=', 'cek.id_ruangan')
                            ->join('tb_divisi', 'tb_divisi.id_divisi', '=', 'cek.id_divisi')
                            ->select(
                                'cek.id',
                                'tb_barang.kode_perangkat',
                                'tb_tipe.nama_tipe',
                                'tb_ssid.nama_ssid',
                                'tb_ruangan.nama_ruangan',
                                'tb_divisi.nama_divisi',
                                'cek.status',
                                'cek.download',
                                'cek.upload',
                                'cek.keterangan',
                                'cek.created_at'
                            )
                            ->where(function ($query) use ($start_date, $end_date) {
                                if ($start_date && $end_date) {
                                    $query->whereBetween('cek.created_at', [$start_date, $end_date]);
                                }
                            })
                            ->paginate(10);
    
        return view('cek.tabel', $data);
    }

    public function export(Request $request) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
            
        // Gunakan query yang sama dengan filter untuk memastikan data yang sama yang diekspor
        $data['cek'] = Cek::join('tb_barang', 'tb_barang.kode_perangkat', '=', 'cek.kode_perangkat')
            ->join('tb_tipe', 'tb_tipe.id_tipe', '=', 'cek.id_tipe')
            ->join('tb_ssid', 'tb_ssid.id_ssid', '=', 'cek.id_ssid')
            ->join('tb_ruangan', 'tb_ruangan.id_ruangan', '=', 'cek.id_ruangan')
            ->join('tb_divisi', 'tb_divisi.id_divisi', '=', 'cek.id_divisi')
            ->select(
                'tb_barang.kode_perangkat',
                'tb_tipe.nama_tipe',
                'tb_ssid.nama_ssid',
                'tb_ruangan.nama_ruangan',
                'tb_divisi.nama_divisi',
                'cek.status',
                'cek.download',
                'cek.upload',
                'cek.keterangan',
                'cek.created_at'
            );
    
        if ($start_date && $end_date) {
            $data['cek']->whereBetween('cek.created_at', [$start_date, $end_date]);
        }
    
        $data['cek'] = $data['cek']->get();

        $filename = 'cek_' . $start_date . '_to_' . $end_date . '.xlsx';
    
        return Excel::download(new CekExport($data['cek']), $filename);
    }
    
    
    public function create() {
        return view('cek.create');
    }

    // public function create() {
    //     $data['barang'] = Barang::all();
    //     $data['tipe'] = Tipe::all();
    //     $data['ssid'] = Ssid::all();
    //     $data['ruangan'] = Ruangan::all();
    //     $data['divisi'] = Divisi::all();
    //     return view('cek.create', $data);
    // }

    public function save(Request $request) {
        $nama = $request->nama;
        $tipe = $request->tipe;
        $ssid = $request->ssid;
        $ruangan = $request->ruangan;
        $divisi = $request->divisi;
        $status = $request->status;
        $upload = $request->upload;
        $download = $request->download;
        $keterangan = $request->keterangan;

        Cek::create([
            'kode_perangkat' => $nama,
            'id_tipe' => $tipe,
            'id_ssid' => $ssid,
            'id_ruangan' => $ruangan,
            'id_divisi' => $divisi,
            'status' => $status,
            'upload' => $upload,
            'download' => $download,
            'keterangan' => $keterangan
        ]);

        return redirect()->route('cek.tabel');

    }

    // public function hasil(Request $request) {
    //     // dd($request->all());
    //     Cek::create($request->except('_token', 'submit'));
    //     return redirect('/cek');
    // }

    public function edit($x) {
        $data['cek'] = Cek::find($x);

        $data['barang'] = Barang::all();
        $data['tipe'] = Tipe::all();
        $data['ssid'] = Ssid::all();
        $data['ruangan'] = Ruangan::all();
        $data['divisi'] = Divisi::all();
        return view('cek.edit', $data);
    }

    public function ubah(Request $request, $x) {
        $nama = $request->nama;
        $tipe = $request->tipe;
        $ssid = $request->ssid;
        $ruangan = $request->ruangan;
        $divisi = $request->divisi;
        $status = $request->status;
        $upload = $request->upload;
        $download = $request->download;
        $keterangan = $request->keterangan;

        $cek = Cek::find($x);
        $cek->update([
            'kode_perangkat' => $nama,
            'id_tipe' => $tipe,
            'id_ssid' => $ssid,
            'id_ruangan' => $ruangan,
            'id_divisi' => $divisi,
            'status' => $status,
            'upload' => $upload,
            'download' => $download,
            'keterangan' => $keterangan
        ]);

        return redirect()->route('cek.tabel');
    }

    public function destroy($x) {
        $cek = Cek::find($x);
        $cek->delete();

        return redirect()->route('cek.tabel');
    }
    

    // public function edit($id){
    //     $cek = Cek::find($id);
    //     // dd($cek);
    //     return view('cek.edit', compact(['cek']));
    // }

    // public function update($id, Request $request) {
    //     $cek = Cek::find($id);
    //     $cek->update($request->except('_token', 'submit'));
    //     return redirect('/cek');
    // }

    // public function destroy($id) {
    //     $cek = Cek::find($id);
    //     $cek->delete();
    //     return redirect('/cek');
    // }
}

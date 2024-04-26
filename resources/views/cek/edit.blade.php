@extends('loyauts.main')

@section('container')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-dark">
                <h1 class="text-center mb-0">Form Edit Data</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST" class="row g-3">
                    @method('put')
                    @csrf
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Perangkat</label>
                        <select name="nama" id="nama" class="form-select">
                            <option value="">--Pilih--</option>
                            {{-- @foreach ($barang as $data) --}}
                            {{-- <option value="{{ $data->kode_perangkat }}" --}}
                            {{-- {{ $data->kode_perangkat == $cek->kode_perangkat ? 'selected' : '' }}>
                                    {{ $data->nama_perangkat }} --}}
                            </option>
                            {{-- @endforeach --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="tipe" class="form-label">Tipe Perangkat</label>
                        <select name="tipe" id="tipe" class="form-select">
                            <option value="">--Pilih--</option>
                            {{-- @foreach ($tipe as $data)
                                <option value="{{ $data->id_tipe }}"
                                    {{ $data->id_tipe == $cek->id_tipe ? 'selected' : '' }}>
                                    {{ $data->nama_tipe }}
                                </option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="ssid" class="form-label">SSID</label>
                        <select name="ssid" id="ssid" class="form-select">
                            <option value="">--Pilih--</option>
                            {{-- @foreach ($ssid as $data)
                                <option value="{{ $data->id_ssid }}"
                                    {{ $data->id_ssid == $cek->id_ssid ? 'selected' : '' }}>
                                    {{ $data->nama_ssid }}
                                </option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="ruangan" class="form-label">Ruangan</label>
                        <select name="ruangan" id="ruangan" class="form-select">
                            <option value="">--Pilih--</option>
                            {{-- @foreach ($ruangan as $data)
                                <option value="{{ $data->id_ruangan }}"
                                    {{ $data->id_ruangan == $cek->id_ruangan ? 'selected' : '' }}>
                                    {{ $data->nama_ruangan }}
                                </option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="divisi" class="form-label">Divisi</label>
                        <select name="divisi" id="divisi" class="form-select">
                            <option value="">--Pilih--</option>
                            {{-- @foreach ($divisi as $data)
                                <option value="{{ $data->id_divisi }}"
                                    {{ $data->id_divisi == $cek->id_divisi ? 'selected' : '' }}>
                                    {{ $data->nama_divisi }}
                                </option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="">--Pilih--</option>
                            <option value="Baik" @if ($cek->status == 'Baik') selected @endif>Baik</option>
                            <option value="Tidak Baik" @if ($cek->status == 'Tidak Baik') selected @endif>Tidak Baik</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="download" class="form-label">Download</label>
                        <input type="text" name="download" class="form-control" id="download" placeholder="Download"
                            value="">
                        {{-- {{ $cek->download }} --}}
                    </div>
                    <div class="col-md-6">
                        <label for="upload" class="form-label">Upload</label>
                        <input type="text" name="upload" class="form-control" id="upload" placeholder="Upload"
                            value="">
                        {{-- {{ $cek->upload }} --}}
                    </div>
                    <div class="col-md-12">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
                        {{-- {{ $cek->keterangan }} --}}
                    </div>
                    <div class="col-md-6">
                        <div class="d-grid gap-2 d-md-block text-start">
                            <button class="btn btn-primary" type="submit" name="submit" value="Update">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

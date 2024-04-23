@extends('loyauts.main')

@section('container')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header  text-dark">
                <h1 class="text-start mb-0">Input Data</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('cek.save') }}" method="POST" class="row g-3">
                    @csrf
                    <!-- Nama Perangkat -->
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Perangkat</label>
                        <select name="nama" id="nama" class="form-select" required>
                            <option value="">--Pilih Perangkat--</option>
                            @foreach ($barang as $data)
                                <option value="{{ $data->kode_perangkat }}">{{ $data->kode_perangkat }} :
                                    {{ $data->nama_perangkat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Tipe Perangkat -->
                    <div class="col-md-6">
                        <label for="tipe" class="form-label">Tipe Perangkat</label>
                        <select name="tipe" id="tipe" class="form-select" required>
                            <option value="">--Pilih Tipe--</option>
                            @foreach ($tipe as $data)
                                <option value="{{ $data->id_tipe }}">{{ $data->nama_tipe }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- SSID -->
                    <div class="col-md-6">
                        <label for="ssid" class="form-label">SSID</label>
                        <select name="ssid" id="ssid" class="form-select" required>
                            <option value="">--Pilih SSID--</option>
                            @foreach ($ssid as $data)
                                <option value="{{ $data->id_ssid }}">{{ $data->nama_ssid }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Ruangan -->
                    <div class="col-md-6">
                        <label for="ruangan" class="form-label">Ruangan</label>
                        <select name="ruangan" id="ruangan" class="form-select" required>
                            <option value="">--Pilih Ruangan--</option>
                            @foreach ($ruangan as $data)
                                <option value="{{ $data->id_ruangan }}">{{ $data->nama_ruangan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Divisi -->
                    <div class="col-md-6">
                        <label for="divisi" class="form-label">Divisi</label>
                        <select name="divisi" id="divisi" class="form-select" required>
                            <option value="">--Pilih Divisi--</option>
                            @foreach ($divisi as $data)
                                <option value="{{ $data->id_divisi }}">{{ $data->nama_divisi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Status -->
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="">--Pilih Status--</option>
                            <option value="Baik">Baik</option>
                            <option value="Tidak Baik">Tidak Baik</option>
                        </select>
                    </div>
                    <!-- Download -->
                    <div class="col-md-6">
                        <label for="download" class="form-label">Download (MB)</label>
                        <div class="input-group">
                            <input type="text" name="download" class="form-control" id="download" required>
                            <span class="input-group-text">Mbps</span>
                        </div>
                    </div>
                    <!-- Upload -->
                    <div class="col-md-6">
                        <label for="upload" class="form-label">Upload (MB)</label>
                        <div class="input-group">
                            <input type="text" name="upload" class="form-control" id="upload" required>
                            <span class="input-group-text">Mbps</span>
                        </div>
                    </div>
                    <!-- Keterangan -->
                    <div class="col-md-12">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" rows="3" required></textarea>
                    </div>
                    <!-- Tombol Simpan -->
                    <div class="col-md-12">
                        <div class="d-grid gap-2 d-md-block text-start ">
                            <button class="btn btn-primary btn-md text-start" type="submit" name="submit"
                                value="Save">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

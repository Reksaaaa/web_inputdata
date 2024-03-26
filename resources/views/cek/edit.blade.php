@extends('loyauts.main')

@section('container')
<span class="d-block p-2 text-bg-primary">
    <h1>From Edit Data</h1></span>

    <form action="/cek/{{ $cek->id }}" method="POST" class="row g-3 mt-5">
        @method('put')
        @csrf
        <div class="col-md-6">
            <label for="inputNamaPerangkat" class="form-label custom-label">Nama Perangkat</label>
            <input type="teks" name="nama" class="form-control" id="inputNamaPerangkat" placeholder="Nama Perangkat" value="{{ $cek->nama }}">
        </div>
        <div class="col-md-6">
            <label for="inputTipePrangkat" class="form-label custom-label">Input Perangkat</label>
            <input type="teks" name="tipe_perangkat" class="form-control" id="inputTipePrangkat" placeholder="Input Perangkat" value="{{ $cek->tipe_perangkat }}">
        </div>
        <div class="col-md-6">
            <label for="inputSSD" class="form-label custom-label">SSID</label>
            <input type="teks" name="ssid" class="form-control" id="inputSSD" placeholder="SSID" value="{{ $cek->ssid }}">
        </div>
        <div class="col-md-6">
            <label for="inputRuangan" class="form-label custom-label">Ruangan</label>
            <input type="teks" name="ruangan" class="form-control" id="inputRuangan" placeholder="Ruangan" value="{{ $cek->ruangan }}">
        </div>
        <div class="col-md-6">
            <label for="inputDivisi" class="form-label custom-label">Divisi</label>
            <input type="teks" name="divisi" class="form-control" id="inputDivisi" placeholder="Divisi" value="{{ $cek->divisi }}">
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label custom-label">Status</label>
            <select name="status" class="form-select" id="inputStatus">
                <option selected>Pilih Status</option>
                <option value="Baik" @if($cek->status == "Baik") selected @endif>Baik</option>
                <option value="Tidak Baik" @if($cek->status == "Tidak Baik") selected @endif>Tidak Baik</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputDownload" class="form-label custom-label">Download</label>
            <input type="teks" name="download" class="form-control" id="inputDownload" placeholder="Download" value="{{ $cek->download }}">
        </div>
        <div class="col-md-6">
            <label for="inputUploud" class="form-label custom-label">Uploud</label>
            <input type="teks" name="upload" class="form-control" id="inputUploud" placeholder="Uploud" value="{{ $cek->upload }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3">{{ $cek->keterangan }}</textarea>
        </div>


        <div class="col-md-6">
            <div class="d-grid gap-2 d-md-block text-start">
                <button class="btn btn-primary" type="submmit" name="submit" value="Update">Update</button>
            </div>
        </div>

    </form>
@endsection
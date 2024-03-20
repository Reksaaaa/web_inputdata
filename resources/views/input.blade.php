@extends('loyauts.main')

@section('container')
<span class="d-block p-2 text-bg-primary">
    <h1>From Input Data</h1></span>

    <form class="row g-3 mt-5">
        <div class="col-md-6">
            <label for="inputNamaPerangkat" class="form-label custom-label">Nama Perangkat</label>
            <input type="teks" class="form-control" id="inputNamaPerangkat" placeholder="Nama Perangkat">
        </div>
        <div class="col-md-6">
            <label for="inputTipePrangkat" class="form-label custom-label">Input Perangkat</label>
            <input type="teks" class="form-control" id="inputTipePrangkat" placeholder="Input Perangkat">
        </div>
        <div class="col-md-6">
            <label for="inputSSD" class="form-label custom-label">SSD</label>
            <input type="teks" class="form-control" id="inputSSD" placeholder="SSD">
        </div>
        <div class="col-md-6">
            <label for="inputRuangan" class="form-label custom-label">Ruangan</label>
            <input type="teks" class="form-control" id="inputRuangan" placeholder="Ruangan">
        </div>
        <div class="col-md-6">
            <label for="inputDivisi" class="form-label custom-label">Divisi</label>
            <input type="teks" class="form-control" id="inputDivisi" placeholder="Divisi">
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label custom-label">Status</label>
            <select class="form-select" id="inputStatus">
                <option selected>Pilih Status</option>
                <option value="1">Baik</option>
                <option value="2">Tidak Baik</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputDownload" class="form-label custom-label">Download</label>
            <input type="teks" class="form-control" id="inputDownload" placeholder="Download">
        </div>
        <div class="col-md-6">
            <label for="inputUploud" class="form-label custom-label">Uploud</label>
            <input type="teks" class="form-control" id="inputUploud" placeholder="Uploud">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <div class="col-md-6">
            <div class="d-grid gap-2 d-md-block text-start">
                <button class="btn btn-primary" type="button">Simpan</button>
            </div>
        </div>

    </form>
@endsection
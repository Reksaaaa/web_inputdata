@extends('loyauts.main')

@section('container')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-dark">
                <h1 class="text-start mb-0">Input Ruangan</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.ubah', $barang->id_perangkat) }}" method="POST" class="row g-3">
                    @csrf
                    <!-- Nama Tipe -->
                    <div class="col-md-12">
                        <label for="upload" class="form-label text-start">Kode Perangkat</label>
                        <div class="input-group">
                            <input type="text" name="kode_perangkat" class="form-control" id="upload"
                                value="{{ $barang->kode_perangkat }}" required>
                        </div>
                        <label for="upload" class="form-label text-start mt-3">Nama Perangkat</label>
                        <div class="input-group">
                            <input type="text" name="nama_perangkat" class="form-control" id="upload"
                                value="{{ $barang->nama_perangkat }}" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="tipe" class="form-label">Tipe Perangkat</label>
                            <select name="tipe" id="tipe" class="form-select">
                                <option value="">--Pilih--</option>
                                @foreach ($tipe as $data)
                                    <option value="{{ $data->id_tipe }}"
                                        {{ $data->id_tipe == $barang->id_tipe ? 'selected' : '' }}>
                                        {{ $data->nama_tipe }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="d-grid gap-2 d-md-block text-start ">
                                <button class="btn btn-primary btn-md text-start mt-3" type="submit" name="submit"
                                    value="Save">Simpan</button>
                            </div>
                        </div>
                    </div>
                    {{-- @error('nama_ruangan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
